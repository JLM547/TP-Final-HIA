// proyecto/backend/controllers/imageGeneration.controller.js
const { OpenAI } = require('openai');

// Función para obtener el cliente de OpenAI (inicialización lazy)
let openai = null;
function getOpenAIClient() {
    if (!openai) {
        const apiKey = process.env.OPENAI_API_KEY;
        if (!apiKey) {
            throw new Error('OPENAI_API_KEY no está configurada. La funcionalidad de generación de imágenes está deshabilitada.');
        }
        openai = new OpenAI({
            apiKey: apiKey,
        });
    }
    return openai;
}

exports.generateImage = async (req, res) => {
    try {
        const { prompt } = req.body;

        // Verificar si OpenAI está configurado
        let client;
        try {
            client = getOpenAIClient();
        } catch (error) {
            return res.status(503).json({ 
                mensaje: 'Servicio de generación de imágenes no disponible. OPENAI_API_KEY no está configurada.',
                error: error.message 
            });
        }
        // ***** AQUÍ ES DONDE DEBES AGREGAR ESTAS LÍNEAS *****
        console.log('Prompt recibido del frontend:', prompt);
        console.log('Longitud del prompt:', prompt ? prompt.length : 0);
        // ***************************************************

        if (!prompt) {
            return res.status(400).json({ mensaje: 'El prompt es requerido para generar la imagen.' });
        }

        // Llamada a la API de DALL-E
        const response = await client.images.generate({
            model: "dall-e-2", // Puedes probar con "dall-e-3" si tienes acceso y quieres mayor calidad (considera el costo)
            prompt: prompt,
            n: 1, // Generar una sola imagen
            size: "512x512", // Tamaño de la imagen (otras opciones: "256x256", "1024x1024")
            response_format: "url", // Queremos que la respuesta incluya una URL a la imagen
        });

        const imageUrl = response.data[0].url; // La URL de la imagen generada

        res.status(200).json({ imageUrl: imageUrl, mensaje: 'Imagen generada exitosamente.' });

    } catch (error) {
        console.error('Error al generar imagen con DALL-E:', error.response ? error.response.data : error.message);
        let errorMessage = 'Error al generar la imagen.';
        if (error.response) {
            if (error.response.status === 401) {
                errorMessage = 'Error de autenticación con OpenAI. Verifica tu API Key.';
            } else if (error.response.status === 429) {
                errorMessage = 'Has excedido tu cuota de OpenAI. Por favor, verifica tu plan.';
            } else if (error.response.data && error.response.data.error) {
                errorMessage = `Error de OpenAI: ${error.response.data.error.message}`;
            }
        }
        res.status(500).json({ mensaje: errorMessage });
    }
};
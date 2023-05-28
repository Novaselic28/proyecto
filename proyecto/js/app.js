// Función para obtener la ubicación del usuario
const obtenerUbicacionUsuario = () => {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(obtenerDatosClimaUbicacionActual, mostrarError);
    } else {
        console.error('Geolocalización no es compatible en este navegador');
    }
};

const obtenerDatosClimaUbicacionActual = async (posicion) => {
    const apiKey = '21c7388663cd399209d7add51d6e7bd2'; // Reemplaza con tu propia clave de API
    const latitud = posicion.coords.latitude;
    const longitud = posicion.coords.longitude;
    const url = `https://api.openweathermap.org/data/2.5/weather?lat=${latitud}&lon=${longitud}&appid=${apiKey}`;

    try {
        const response = await fetch(url);
        const data = await response.json();

        // Procesa los datos de respuesta
        console.log(data);
        // Obtén las referencias a los elementos HTML
        const ciudadElement = document.getElementById('ciudad');
        const descripcionElement = document.getElementById('descripcion');
        const temperaturaElement = document.getElementById('temperatura');
        const humedadElement = document.getElementById('humedad');

        // Actualiza los datos climáticos en los elementos HTML
        ciudadElement.textContent = data.name;;
        descripcionElement.textContent = data.weather[0].description;
        const temperaturaFahrenheit = data.main.temp;
        const temperaturaCelsius = (temperaturaFahrenheit - 273.15) .toFixed(2);
        temperaturaElement.textContent = `Temperatura: ${temperaturaCelsius}°C`;
        humedadElement.textContent = `Humedad: ${data.main.humidity}%`;
        // Aquí puedes utilizar los datos para mostrar la información climática en tu aplicación
    } catch (error) {
        console.error('Error al obtener los datos climáticos:', error);
    }
};

const obtenerDatosClima = async (posicion) => {
    const apiKey = '21c7388663cd399209d7add51d6e7bd2'; // Reemplaza con tu propia clave de API
    const latitud = posicion.coords.latitude;
    const longitud = posicion.coords.longitude;
    const url = `https://api.openweathermap.org/data/2.5/weather?lat=${latitud}&lon=${longitud}&appid=${apiKey}`;

    try {
        const response = await fetch(url);
        const data = await response.json();
        console.log(data)
        // Obtén las referencias a los elementos HTML
        const ciudadElement = document.getElementById('ciudad');
        const descripcionElement = document.getElementById('descripcion');
        const temperaturaElement = document.getElementById('temperatura');
        const humedadElement = document.getElementById('humedad');

        // Actualiza los datos climáticos en los elementos HTML
        ciudadElement.textContent = ciudad;
        descripcionElement.textContent = data.weather[0].description;
        const temperaturaFahrenheit = data.main.temp;
        const temperaturaCelsius = ((temperaturaFahrenheit - 32) * 5 / 9).toFixed(2);
        temperaturaElement.textContent = `Temperatura: ${temperaturaCelsius}°C`;
        humedadElement.textContent = `Humedad: ${data.main.humidity}%`;
    } catch (error) {
        console.error('Error al obtener los datos climáticos:', error);
    }
};

// Función para mostrar errores de geolocalización
const mostrarError = (error) => {
    console.error('Error de geolocalización:', error.message);
};

// Ejemplo de uso: obtener datos climáticos para la ciudad de Nueva York
obtenerUbicacionUsuario();



    const apiKey = "0270da9abf6372fb710e2efd8c867b56";
    const lat = -7.290779140159621; // Contoh koordinat Jakarta
    const lon = 112.77913856626402;

    async function fetchWeather() {
        try {
            const response = await fetch(
                `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${apiKey}&units=metric`
            );
            const data = await response.json();
            const weatherDiv = document.getElementById("weather");

            const weatherHtml = `
                <p><strong>Cuaca:</strong> ${data.weather[0].description}</p>
                <p><strong>Suhu:</strong> ${data.main.temp}°C</p>
                <p><strong>Kelembapan:</strong> ${data.main.humidity}%</p>
            `;
            weatherDiv.innerHTML = weatherHtml;
        } catch (error) {
            console.error("Gagal mendapatkan data cuaca:", error);
            document.getElementById("weather").innerHTML = "<p>Gagal memuat data cuaca.</p>";
        }
    }

    fetchWeather();
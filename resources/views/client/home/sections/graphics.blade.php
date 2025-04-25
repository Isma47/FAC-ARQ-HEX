<div class="bg-white shadow-md rounded-xl p-8 ">  

    <h2 class="text-3xl font-bold text-gray-800 mb-4 uppercase font-displayHat">Mi rendimiento</h2>

    <div class="contenedor-graficas">
        <div class="grafica-contenedor">
          <canvas id="miGrafica1"></canvas>
        </div>
        <div class="grafica-contenedor">
          <canvas id="miGrafica2"></canvas>
        </div>
        <div class="grafica-contenedor">
          <canvas id="miGrafica3"></canvas>
        </div>
      </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
  .contenedor-graficas {
    display: flex;
    justify-content: space-around; /* Distribuye las gráficas con espacio entre ellas */
    align-items: center; /* Centra verticalmente las gráficas (opcional) */
    width: 80%; /* Ajusta el ancho del contenedor según necesites */
    margin: 0 auto; /* Centra el contenedor en la página (opcional) */
  }

  .grafica-contenedor {
    width: 30%; /* Ajusta el ancho de cada gráfica según necesites */
  }
</style>


<script>
    // Datos de ejemplo para la primera gráfica
    const datos1 = {
      labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
      datasets: [{
        label: 'Ventas',
        data: [65, 59, 80, 81, 56],
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1
      }]
    };

    // Configuración de la primera gráfica
    const config1 = {
      type: 'bar',
      data: datos1,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // Crear la primera gráfica
    const miGrafica1 = new Chart(
      document.getElementById('miGrafica1'),
      config1
    );

    // Datos de ejemplo para la segunda gráfica
    const datos2 = {
      labels: ['A', 'B', 'C', 'D'],
      datasets: [{
        label: 'Porcentaje',
        data: [30, 20, 40, 10],
        backgroundColor: [
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)'
        ],
        borderColor: [
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)'
        ],
        borderWidth: 1
      }]
    };

    // Configuración de la segunda gráfica
    const config2 = {
      type: 'pie',
      data: datos2,
    };

    // Crear la segunda gráfica
    const miGrafica2 = new Chart(
      document.getElementById('miGrafica2'),
      config2
    );

    // Datos de ejemplo para la tercera gráfica
    const datos3 = {
      labels: ['Semana 1', 'Semana 2', 'Semana 3', 'Semana 4'],
      datasets: [{
        label: 'Usuarios',
        data: [120, 150, 130, 180],
        fill: false,
        borderColor: 'rgb(75, 192, 192)',
        tension: 0.1
      }]
    };

    // Configuración de la tercera gráfica
    const config3 = {
      type: 'line',
      data: datos3,
    };

    // Crear la tercera gráfica
    const miGrafica3 = new Chart(
      document.getElementById('miGrafica3'),
      config3
    );
  </script>
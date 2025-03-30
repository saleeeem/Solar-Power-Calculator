<style>
  body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background-color: #f9f9f9;
  }
  
  .section1, .section2 {
      display: block;
      padding: 0px !important;
      margin: 0;
  }
  
  .input-section, .section.graphs-section {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      margin-bottom: 16px;
      background: #f6f6f6;
      border-radius: 20px;
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      padding: 40px;
  
  }
  .input-section{
      background-image: url(https://mhasherrenewableenergy.com/wp-content/uploads/2024/12/وتغ-01.png);
      background-position: top;
      background-repeat: no-repeat;
  }
  input#demand-coverage {
      margin: 0;
  }
  .input-section label {
      flex: 1 1 45%;
      display: flex;
      flex-direction: column;
      font-size: 14px;
      font-weight: 600;
      color: #484848;
  }
  
  .input-section input[type="number"] {
      padding: 22px 16px;
      border-radius: 5px;
      margin-top: 5px;
      height: 50px;
      font-size: 18px;
      font-weight: 500;
      text-transform: capitalize;
      box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
      border: 1px solid #ccc;
  }
  .section.section2.results-section {
      padding: 0;
      margin: 0;
      display: flex;
      column-gap: 15px;
  }
  
  .results-container, .calcu-last-conatiner {
      padding: 15px;
      background: #f6f6f6;
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      border-radius: 20px;
      display: flex;
      flex-direction: column;
      gap: 20px;
  flex:50%;
  }
  
  
  .results-item {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 13px;
      color: #333;
      margin-bottom: 8px;
  }
  
  .results-item img {
      width: 20px;
      height: 20px;
  }
  
  strong {
      font-weight: bold; /* Make headings bold */
  }
  
  
  
  button#next-steps {
   background-color: #009245;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 10px 30px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 0;
  }
  
  button:hover {
      background-color: #0056b3;
  }
  .section.graphs-section {
      display: none;
  }
  
  canvas {
      margin-top: 20px;
      max-width: 100%;
  }
  .qoute-product{
  display:block;
  box-shadow:none;
  padding:0;
  }
  
  /* Styling the product card container */
  .product-cards {
      display: none;
      grid-template-columns: repeat(2, 1fr); /* Two columns */
      gap: 20px;
      max-width: 1200px;
      margin: 0 auto;
  }
  
  /* Styling each individual product card */
  .product-card {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  
  .product-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }
  
  .product-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 15px;
  }
  
  .product-title {
      font-size: 20px;
      font-weight: bold;
      color: #333;
      margin-bottom: 10px;
  }
  
  .product-price {
      font-size: 18px;
      color: #4CAF50;
      margin-bottom: 15px;
  }
  
  .product-link {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border-radius: 5px;
      text-decoration: none;
      font-size: 16px;
      transition: background-color 0.3s ease;
  }
  
  .product-link:hover {
      background-color: #45a049;
  }
  
    .results-item span {
      display: block;
      margin-left: auto;
    }
  
  /* Responsive design for smaller screens */
  @media screen and (max-width: 768px) {
      .product-cards {
          grid-template-columns: 1fr; /* Single column on smaller screens */
      }
  span#coverage-percentage {
      color: #fff;
  }
  .input-section {
      display:block;
      background-repeat: no-repeat;
  background-position: 50px 33px;
      background-size: cover;
  padding: 25px;
  }
  .section.section2.results-section {
      display: flex;
      flex-direction: column;
      row-gap: 20px;
  }
  .results-item {
      display: flex;
      align-items: center;
      gap: 7px;
      font-size: 11px;
      color: #333;
      margin-bottom: 8px;
  }
  .results-container, .calcu-last-conatiner {
      padding: 18px;
      background: #f6f6f6;
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      border-radius: 20px;
      display: flex;
      flex-direction: column;
      gap: 20px;
      flex: 100%;
      width: 100%;
  }
  .footer-sec-chart{
  display: flex;
      gap: 20px;
      margin-top: 20px;
      flex-direction: column;
  }
  .section.graphs-section{
  display: none !important;
  }
  }
  </style>
  
  <div id="solar-calculator">
      <h1>Solar Panel Calculator</h1>
  
      <!-- Input Section -->
      <div class="section section1">
          <div class="input-section">
              <label for="utility-bill">
                  Monthly Utility Bill (ZMW)
                  <input type="number" id="utility-bill" placeholder="Enter your bill amount 0.00" min="0">
              </label>
              <label for="energy-usage">
                  Monthly Energy Usage (kW)
                  <input type="number" id="energy-usage" placeholder="Enter energy usage 0.00" min="0">
              </label>
  <label for="demand-coverage" style="display: block;
      max-width: 60%;">
      What percentage of your energy needs should this system meet?
      <div style="display: flex; align-items: center; gap: 10px; width: 100%; margin-top: 10px">
          <input type="range" id="demand-coverage" style="flex: 1;" min="0" max="100" step="1">
          <span id="coverage-percentage">50%</span>
      </div>
  </label>
    <div id="error-message" style="color: red; display: none; margin-top: 10px; width:100%">
              Check your inputs to ensure accurate results.
          </div>
  <div id="next-step-error" style="color: red; display: none; margin-top: 10px; width:100%">
              Please enter all required details to calculate your solar system.
          </div>
          </div>
      </div>
          
      <div class="result-title" style="display: none;">
          <h2>Here’s your recommended solar setup based on your inputs.</h2>
  <p>Costs are approximations to help with decision-making. Final prices may vary depending on specific suppliers and products</p>
      </div>
      <!-- Results Section -->
  <div class="section section2 results-section">
      <div class="results-container">
          <!-- First Container -->
          <div class="results-grid">
              <div class="results-item">
                  <img src="https://mhasherrenewableenergy.com/wp-content/uploads/2024/12/solar-power.png" alt="Solar Panel Icon">
                  <strong>Panels Needed:</strong> <span id="panels-needed">Enter your details to see the results</span>
              </div>
              <div class="results-item">
                  <img src="https://mhasherrenewableenergy.com/wp-content/uploads/2024/12/money-managemen.png" alt="Panels Cost Icon">
                  <strong>Panels Cost:</strong> <span id="panels-cost">Enter your details to see the results</span>
              </div>
              <div class="results-item">
                  <img src="https://mhasherrenewableenergy.com/wp-content/uploads/2024/12/production.png" alt="Inverter Cost Icon">
                  <strong>Inverter Cost:</strong> <span id="inverter-cost">Enter your details to see the results</span>
              </div>
              <div class="results-item">
            <img src="https://mhasherrenewableenergy.com/wp-content/uploads/2024/12/money.png" alt="installation Cost Icon">
                  <strong>Installation Cost:</strong> <span id="installation-cost">Enter your details to see the results</span>
              </div>
             <div class="results-item">
            <img src="https://mhasherrenewableenergy.com/wp-content/uploads/2024/12/Battery-Capacity.png" alt="battery Cost Icon">
                  <strong>Battery Cost:</strong> <span id="battery-cost">Enter your details to see the results</span>
              </div>
          </div>
      </div>
      <div class="results-container">
          <!-- Second Container -->
          <div class="results-grid">
              <div class="results-item">
            <img src="https://mhasherrenewableenergy.com/wp-content/uploads/2024/12/Battery-Capacity.png" alt="battery capicty Icon">
                  <strong>Battery Capacity:</strong> <span id="battery-capacity">Enter your details to see the results</span>
              </div>
              <div class="results-item">
            <img src="https://mhasherrenewableenergy.com/wp-content/uploads/2024/12/Estimated-Savings-per-Year.png" alt="est savingt Icon">
                  <strong>Estimated Savings per Year:</strong> <span id="savings-per-year">Enter your details to see the results</span>
              </div>
              <div class="results-item">
            <img src="https://mhasherrenewableenergy.com/wp-content/uploads/2024/12/Years-to-Recoup-Investment-2.png" alt="recoup Icon">
                  <strong>Payback Period:</strong> <span id="recoup-years">Enter your details to see the results</span>
              </div>
    <div class="results-item">
            <img src="https://mhasherrenewableenergy.com/wp-content/uploads/2024/12/money-managemen.png" alt="enviornmental">
                  <strong>Environmental Impact:</strong> <span id="enviornmental-impact">Enter your details to see the results</span>
              </div>
              <div class="results-item">
            <img src="https://mhasherrenewableenergy.com/wp-content/uploads/2024/12/Total-Cost.png" alt="total Cost Icon">
                  <strong>Total Cost:</strong> <span id="total-cost">Enter your details to see the results</span>
              </div>
          </div>
      </div>
  </div>
  <div class="footer-sec-chart" style='display: flex; gap: 40px; margin-top: 20px;'>
    <!-- Action Section -->
      <div class="section calcu-last-conatiner qoute-product">
          <button id="next-steps">Request a Quote</button>
   <div class="product-cards">
          <!-- Product 1 -->
          <div class="product-card">
            <img class="product-image" src="https://mhasherrenewableenergy.com/wp-content/uploads/2025/03/580w-510x510.webp" alt="Product 1" />
            <h3 class="product-title">540W/550W/580W H/C Mono Crystalline Solar Panel</h3>
            <p class="product-price">ZK 6,600.00</p>
            <p><a class="product-link" href="https://mhasherrenewableenergy.com/product/540w-550w-580w-h-c-mono-crystalline-solar-panel/">View Product</a></p>
        </div>
        <p><!-- Product 2 --></p>
        <div class="product-card">
            <img class="product-image" src="https://mhasherrenewableenergy.com/wp-content/uploads/2024/10/New-Deye-Inverter-Battery-Combos-IBCD16KI2X5K200AB-510x510.jpg" alt="Product 2" />
            <h3 class="product-title">Deye 16KW Inverter</h3>
            <p class="product-price">ZK 85,268.70</p>
            <p><a class="product-link" href="https://mhasherrenewableenergy.com/product/deye-16kw-inverter/">View Product</a></p>
        </div>
        <p><!-- Product 3 --></p>
        <div class="product-card">
            <img class="product-image" src="https://mhasherrenewableenergy.com/wp-content/uploads/2024/10/A48100-3-510x406.jpeg" alt="Product 3" />
            <h3 class="product-title">Dyness A48100 Battery</h3>
            <p class="product-price">ZK 27,370.20</p>
            <p><a class="product-link" href="https://mhasherrenewableenergy.com/product/dyness-a48100-battery/">View Product</a></p>
        </div>
        <p><!-- Product 4 --></p>
        <div class="product-card">
            <img class="product-image" src="https://mhasherrenewableenergy.com/wp-content/uploads/2024/10/easysolar-ii-48-3000-35-32-mppt-250-70-gx-800x800-1-510x510.png" alt="Product 4" />
            <h3 class="product-title">EASYSOLAR II 48/3000/35-32 MPPT Inverter</h3>
            <p class="product-price">ZK 38,670.00</p>
            <p><a class="product-link" href="https://mhasherrenewableenergy.com/product/easysolar-ii-48-3000-35-32-mppt-inverter/">View Product</a></p>
        </div>
      </div>
      </div>
      <!-- Graphs Section -->
      <div class="section graphs-section calcu-last-conatiner">
          <div>
              <canvas id="savingsChart"></canvas>
          </div>
          <div>
              <canvas id="energyChart"></canvas>
          </div>
      </div>
  </div>
    
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>

    

                jQuery(document).ready(function ($) {
                    $("#energy-usage").on("input", function () {
                        var energyUsage = parseFloat($(this).val());
                        if (energyUsage >= 0) {
                            $(".section.graphs-section").css("display", "block");
                            $(".product-cards").css("display", "grid");
                            $(".section.graphs-section").slideDown();
                            $(".result-title").slideDown();
                        } else {
                            $(".product-cards").css("display", "none");
                            $(".section.graphs-section").slideUp();
                            $(".result-title").slideUp();
                        }
                    });
                    $("#demand-coverage").on("input", function () {
                        $("#coverage-percentage").text($(this).val() + "%");
                    });
                    const savingsCtx = document.getElementById('savingsChart').getContext('2d');
                    const energyCtx = document.getElementById('energyChart').getContext('2d');
                    let savingsChart, energyChart;
                    $("#utility-bill, #energy-usage, #demand-coverage").on("input", function () {
                        calculateResults();
                    });
                    $("#next-steps").on("click", function () {
                        const utilityBill = parseFloat($("#utility-bill").val()) || 0;
                        const energyUsage = parseFloat($("#energy-usage").val()) || 0;
                        const demandCoverage = parseFloat($("#demand-coverage").val()) || 0;
                        if (utilityBill <= 0 || energyUsage <= 0 || demandCoverage <= 0) {
                            $("#next-step-error").show();
                        } else {
                            $("#next-step-error").hide();
                            var totalCost = $("#total-cost").text();
                            window.location.href = "/contact/?total-cost=" + totalCost;
                        }
                    });
                    function calculateResults() {
                        const utilityBill = parseFloat($("#utility-bill").val()) || 0;
                        const energyUsage = parseFloat($("#energy-usage").val()) || 0;
                        const demandCoverage = parseFloat($("#demand-coverage").val()) || 0;
                        const demandCovrVal = demandCoverage / 1000;
                        const demandCovrValpanel = demandCoverage / 100;
                        console.log(demandCovrVal);
                        const dailyEnergyConsumption = energyUsage / 30;
                        const dischargeTime = 5;
                        const peakLoad = dailyEnergyConsumption / 4;
                        const costPerkWhBattery = 3400;
                        if (utilityBill <= 0 || energyUsage <= 0 || demandCoverage <= 0 || demandCoverage > 100) {
                            $("#error-message").show();
                            return;
                        } else {
                            $("#error-message").hide();
                        }
                        const panelCapacity = 550;
                        const panelCost = 4144;
                        const installationCostPerPanel = 4144;
                        const inverterEfficiency = 0.9;
                        const batteryCapacityPerPanel = 5;
                        const panelsNeeded = Math.ceil((energyUsage * demandCovrValpanel) / 82.5);
                        const totalPanelCost = panelsNeeded * panelCost;
                        const totalInstallationCost = 5000;
                        const inverterSize = peakLoad / inverterEfficiency;
                        const inverterCost = inverterSize * 4420;
                        const batteryCapacity = (energyUsage * demandCovrVal) / dischargeTime;
                        const batteryCost = batteryCapacity * costPerkWhBattery;
                        const totalCost = totalPanelCost + totalInstallationCost + inverterCost + batteryCost;
                        const savingsPerYear = utilityBill * (demandCoverage / 100);
                        const annualCO2Offset = dailyEnergyConsumption * 365 * 0.7;
                        $("#panels-needed").text("You need " + panelsNeeded + " panels (550W each)");
                        $("#total-cost").text(totalCost.toFixed(2) + " ZMW");
                        $("#panels-cost").text(totalPanelCost.toFixed(2) + " ZMW");
                        $("#inverter-cost").text(inverterCost.toFixed(2) + " ZMW");
                        $("#installation-cost").text(totalInstallationCost.toFixed(2) + " ZMW");
                        $("#battery-cost").text(batteryCost.toFixed(2) + " ZMW");
                        $("#system-panels").text(panelsNeeded);
                        $("#inverter-size").text("Your inverter size is " + inverterSize.toFixed(1) + " kW");
                        $("#battery-capacity").text(batteryCapacity > 0 ? batteryCapacity.toFixed(1) + " kWh" : "N/A");
                        $("#savings-per-year").text((savingsPerYear * 12).toFixed(2) + " ZMW");
                        $("#enviornmental-impact").text(annualCO2Offset.toFixed(2) + "kg CO2/year");
                      const recoupYears = totalCost / (savingsPerYear * 12) ;
                     //   const recoupYears1 = savingsPerYear / 12;
                        $("#recoup-years").text(recoupYears.toFixed(1) + " years");
                        const years = Array.from({ length: 25 }, (_, i) => i + 1);
                        const savings = years.map((year) => savingsPerYear * year);
                        const costs = years.map(() => totalCost);
                        const solarProduction = panelsNeeded * panelCapacity * 365 * 4;
                        const energyNeeds = energyUsage * 365;
                        if (savingsChart) savingsChart.destroy();
                        savingsChart = new Chart(savingsCtx, {
                            type: "line",
                            data: {
                                labels: years,
                                datasets: [
                                    { label: "Savings Over Time (ZMW)", data: savings, borderColor: "green", fill: false },
                                    { label: "Total Cost (ZMW)", data: costs, borderColor: "red", fill: false },
                                ],
                            },
                            options: { responsive: true, plugins: { title: { display: true, text: "Savings Over Time vs. Total Cost" } } },
                        });
                        if (energyChart) energyChart.destroy();
                        energyChart = new Chart(energyCtx, {
                            type: "bar",
                            data: { labels: ["Energy Needs", "Solar Production"], datasets: [{ label: "kWh per Year", data: [energyNeeds, solarProduction], backgroundColor: ["blue", "yellow"] }] },
                            options: { responsive: true, plugins: { title: { display: true, text: "Energy Needs vs. Solar Energy Production" } } },
                        });
                    }
                });
           
    </script>


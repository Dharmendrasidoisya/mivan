<div class="ul-breadcrumb">
    <div class="wow animate__fadeInUp">
        <h2 class="ul-breadcrumb-title">Availability Status</h2>
        <div class="ul-breadcrumb-nav">
            <a href="{{ BaseHelper::getHomepageUrl() }}">Home</a>
            <span class="separator"><i class="flaticon-aro-left"></i></span>
            <span class="current-page">Availability Status</span>
        </div>
    </div>
</div>
<!-- BREADCRUMB SECTION END -->


<div class="ul-inner-page-content-wrapper">
    <div class="ul-inner-page-container">

        <div class="ul-project-details-body">
            <div class="row gy-5">
                <!-- left -->
                {!! $project->content !!}
                <div class="col-lg-12">
                    <div class="ul-project-status-legend"
                        style="margin-bottom: 20px; display: flex; gap: 5px; font-family: sans-serif;     overflow: auto;">
                        <div
                            style="display: flex; align-items: center; gap: 10px; border: 1px solid ; padding: 5px 5px; border-radius: 4px;">
                            <div style="width: 20px; height: 20px; background-color: #fff; border-radius: 2px;    border: 1px solid;">
                            </div>
                            <span style="font-weight: 600; font-size: 14px;">Available</span>
                        </div>
                        <div
                            style="display: flex; align-items: center; gap: 5px; border: 1px solid ; padding: 5px 5px; border-radius: 4px;    overflow: auto;">
                            <div style="width: 20px; height: 20px; background-color: #D20001; border-radius: 2px;border: 1px solid;">
                            </div>
                            <span style="font-weight: 600; font-size: 14px;">Booked</span>
                        </div>
                        <div
                            style="display: flex; align-items: center; gap: 5px; border: 1px solid ; padding: 5px 5px; border-radius: 4px;    overflow: auto;">
                            <div style="width: 20px; height: 20px; background-color: #FFFE00; border-radius: 2px;border: 1px solid;">
                            </div>
                            <span style="font-weight: 600; font-size: 14px;">Hold</span>
                        </div>
                    </div>

                    <div class="ul-project-details-block wow animate__fadeIn" style="    overflow: auto;">
                        @if (!empty($project) && !empty($project->location))
                            {!! $project->location !!}
                        @else
                            <p>Location data not available</p>
                        @endif
                    </div>
                    <?php
           $projectId = $project->id ?? null;

$plots = \DB::table('faqs')
    ->when($projectId, function ($query) use ($projectId) {
        $query->where('category_id', $projectId);
    })
    ->get()
    ->keyBy('plot');
                    // dd($plots);
                    ?>
                    <script>
                        window.plotData = @json($plots);
                    </script>
                </div>
            </div>
        </div>
<!--        <div id="plotPriceForm" style="display:none;">-->
<!--    <div class="form-header">-->
<!--        <span class="ul-section-sub-title">Plot Price Calculation</span>-->
<!--        {{-- <h2 class="ul-section-title">Fill details to calculate area and installments</h2> --}}-->
<!--        <h2 class="ul-section-title"> {!! $project->name !!} - Offer Letter</h2>-->
<!--    </div>-->

<!--    <div class="top-info-grid">-->
<!--        <div class="form-section">-->
<!--            <label for="form_name">Name</label>-->
<!--            <input type="text" id="form_name" placeholder="Enter your name">-->
<!--        </div>-->
<!--        <div class="form-section">-->
<!--            <label for="form_contact">Contact No.</label>-->
<!--            <input type="text" id="form_contact" placeholder="Enter contact number">-->
<!--        </div>-->
<!--        <div class="form-section">-->
<!--            <label for="form_email">Email Id</label>-->
<!--            <input type="email" id="form_email" placeholder="Enter email">-->
<!--        </div>-->
<!--    </div>-->

<!--    <div class="form-section">-->
<!--        <label for="form_plot">Select Plot No.</label>-->
<!--        <select id="form_plot">-->
<!--            <option value="">-- Select Plot --</option>-->
<!--        </select>-->
<!--    </div>-->

<!--    <div class="form-grid">-->
<!--        <div>-->
<!--            <label>Plot Area (Sq. Yard)</label>-->
<!--            <input type="text" id="form_area_yard" readonly>-->
<!--        </div>-->
<!--        <div>-->
<!--            <label>Plot Area (Sq. Feet)</label>-->
<!--            <input type="text" id="form_area_feet" readonly>-->
<!--        </div>-->
<!--    </div>-->

<!--    <div class="form-grid">-->
<!--        <div>-->
<!--            <label>Price per Sq. Yard</label>-->
<!--            <input type="text" id="form_price_yard" readonly>-->
<!--        </div>-->
<!--        <div>-->
<!--            <label>Price per Sq. Feet</label>-->
<!--            <input type="text" id="form_price_feet" readonly>-->
<!--        </div>-->
<!--    </div>-->

<!--    <div class="form-section">-->
<!--        <label>Total Payment</label>-->
<!--        <input type="text" id="form_total" readonly>-->
<!--    </div>-->

<!--    <h4>Option-1</h4>-->
<!--    <div class="form-grid">-->
<!--        <div>-->
<!--            <label>Down Payment (25%)</label>-->
<!--            <input type="text" id="form_down1" readonly>-->
<!--        </div>-->
<!--        <div>-->
<!--            <label>Rest Payment (75%)</label>-->
<!--            <input type="text" id="form_rest1" readonly>-->
<!--        </div>-->
<!--    </div>-->
<!--    <p>Down Payment: Within One Month | Rest Payment: Within Three Months</p>-->

<!--    <h4>Option-2</h4>-->
<!--    <div class="form-grid">-->
<!--        <div>-->
<!--            <label>Down Payment (25%)</label>-->
<!--            <input type="text" id="form_down2" readonly>-->
<!--        </div>-->
<!--        <div>-->
<!--            <label>12 Months Installments</label>-->
<!--            <input type="text" id="form_install12" readonly>-->
<!--        </div>-->
<!--        <div>-->
<!--            <label>24 Months Installments</label>-->
<!--            <input type="text" id="form_install24" readonly>-->
<!--        </div>-->
<!--    </div>-->
<!--    <p>Down Payment: Within One Month | Rest Payment: Per Month Installments</p>-->

<!--    <div class="form-buttons">-->
<!--        <button id="sendEmail">SEND EMAIL</button>-->
<!--        <button id="createPDF">CREATE PDF</button>-->
<!--    </div>-->
<!--</div>-->
    </div>
</div>
<div id="plotTooltip"
    style="display:none;
            position:absolute;
            background:#fff;
            border:1px solid #ccc;
            padding:10px;
            z-index:9999;
            font-size:14px;
            box-shadow:0 2px 10px rgba(0,0,0,0.15);">
</div>



<style>
    .form-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .form-header h3 {
        color: #000;
        font-size: 28px;
        margin-bottom: 5px;
    }

    #plotPriceForm {
        /* max-width: 1410px; */
        /* પહોળાઈ વધારી દીધી */
        margin: 40px auto;
        background: #fff;
        padding: 25px 30px;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);

    }

    #plotPriceForm h3 {
        text-align: center;
        margin-bottom: 20px;
        color: #000;
    }

    #plotPriceForm h4 {
        margin-top: 20px;
        margin-bottom: 10px;
        color: #000;
        font-weight: 600;
        border-bottom: 1px solid #eee;
        padding-bottom: 5px;
    }

    .form-section {
        margin-bottom: 15px;
    }

    .form-section label {
        display: block;
        margin-bottom: 5px;
        font-weight: 500;
        color: #333;
    }

    .form-section input,
    .form-section select {
        width: 100%;
        padding: 8px 10px;
        border: 1px solid #dfb45e;
        border-radius: 6px;
        font-size: 14px;
        outline: none;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-section input:focus,
    .form-section select:focus {
        border-color: #000;
        box-shadow: 0 0 5px rgba(46, 125, 50, 0.2);
    }

    /* એક લાઈનમાં 3 ફિલ્ડ લાવવા માટેનો મુખ્ય બદલાવ */
    .form-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        /* 3 સરખા ભાગ */
        gap: 20px;
        margin-bottom: 15px;
    }

    /* જો તમે ઈચ્છતા હોવ કે નામ, કોન્ટેક્ટ અને ઈમેલ પણ એક લાઈનમાં આવે */
    .top-info-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-bottom: 0px;
    }

    /* મોબાઈલ વ્યુ માટે (Responsive) */
    @media (max-width: 768px) {
        .form-section {
            margin-bottom: 5px;
        }

        .top-info-grid {
            gap: 0px !important;
        }

        .form-grid {
            gap: 0px !important;
        }

        .form-grid,
        .top-info-grid {
            grid-template-columns: 1fr;
            /* મોબાઈલમાં એકની નીચે એક આવશે */
        }
    }

    .small-text {
        font-size: 12px;
        color: #666;
        margin-top: -5px;
        margin-bottom: 10px;
    }

    .form-buttons {
        text-align: center;
        margin-top: 20px;
    }

    .form-buttons button {
        padding: 10px 20px;
        margin: 5px;
        border: none;
        border-radius: 6px;
        color: #fff;
        font-weight: 500;
        cursor: pointer;
        transition: background 0.3s, transform 0.2s;
    }

    .form-buttons button:hover {
        transform: translateY(-2px);
    }

    #sendEmail {
        background: #000;
    }

    #sendEmail:hover {
        background: #1b5e20;
    }

    #createPDF {
        background: #c62828;
    }

    #createPDF:hover {
        background: #8e0000;
    }

    input {
        border: 1px solid #dfb45e;
    }
</style>
<script>
document.getElementById('createPDF').addEventListener('click', function () {
    // 1. Validation: Check if fields are empty
    const name = document.getElementById('form_name').value;
    const contact = document.getElementById('form_contact').value;
    const email = document.getElementById('form_email').value;
    const plot = document.getElementById('form_plot').value;

    if (!name || !contact || !email || !plot) {
        alert("Please fill in all details (Name, Contact, Email, and Plot No) before creating the PDF.");
        return;
    }

    // 2. Target element
    const element = document.getElementById('plotPriceForm');

    // 3. PDF Settings
    const opt = {
        margin:       10,
        filename:     `Offer_Letter_${name.replace(/\s+/g, '_')}.pdf`,
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { 
            scale: 2, 
            useCORS: true,
            // 'onclone' will only change the PDF copy, NOT your actual screen
            onclone: (clonedDoc) => {
                // Hide the buttons ONLY in the PDF copy
                const pdfButtons = clonedDoc.querySelector('.form-buttons');
                if (pdfButtons) {
                    pdfButtons.remove(); 
                }
                
                // Style inputs for the PDF to look clean
                clonedDoc.querySelectorAll('input, select').forEach(el => {
                    el.style.border = '1px solid #ccc';
                    el.style.padding = '5px';
                });
            }
        },
        jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
    };

    // 4. Generate PDF
    html2pdf().set(opt).from(element).save();
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const plotData = window.plotData || {}; // Your plot data object
    const totalPlots = 100; // Change as per your project

    const form = document.getElementById('plotPriceForm');
    const plotSelect = document.getElementById('form_plot');

    const areaYard = document.getElementById('form_area_yard');
    const areaFeet = document.getElementById('form_area_feet');
    const priceYard = document.getElementById('form_price_yard');
    const priceFeet = document.getElementById('form_price_feet');
    const totalInput = document.getElementById('form_total');
    const down1 = document.getElementById('form_down1');
    const rest1 = document.getElementById('form_rest1');
    const down2 = document.getElementById('form_down2');
    const install12 = document.getElementById('form_install12');
    const install24 = document.getElementById('form_install24');

    // 1️⃣ Populate dropdown with all plots
    for (let i = 1; i <= totalPlots; i++) {
        const opt = document.createElement('option');
        opt.value = i;
        opt.textContent = 'Plot ' + i;
        plotSelect.appendChild(opt);
    }

    // 2️⃣ Calculation function
    function calculate(plotNo) {
        const d = plotData[plotNo] || {};

        areaYard.value = d.area_sq_yard || '';
        areaFeet.value = d.area_sq_ft || '';
        priceYard.value = d.price_sq_yard || '';
        priceFeet.value = d.price_sq_ft || '';

        const total = (d.area_sq_yard || 0) * (d.price_sq_yard || 0);
        totalInput.value = total ? Math.round(total) : '';

        const down = total * 0.25;
        const rest = total * 0.75;

        down1.value = total ? Math.round(down) : '';
        rest1.value = total ? Math.round(rest) : '';

        down2.value = total ? Math.round(down) : '';
        install12.value = total ? Math.round(rest / 12) : '';
        install24.value = total ? Math.round(rest / 24) : '';
    }

    // 3️⃣ Dropdown change
    plotSelect.addEventListener('change', function() {
        if (this.value) {
            calculate(this.value);
            form.style.display = 'block';
            form.scrollIntoView({ behavior: 'smooth' });
        }
    });

    // 4️⃣ Table plot click → show form & select plot
    document.querySelectorAll('#plotTableBody td').forEach(td => {
        td.addEventListener('click', function() {
            const plotNo = this.dataset.plot;
            form.style.display = 'block';
            plotSelect.value = plotNo;
            calculate(plotNo);
            form.scrollIntoView({ behavior: 'smooth' });
        });
    });
});
</script>

<style>
    #plotTableBody td {
        cursor: pointer;
        padding: 15px;
        text-align: center;
        font-weight: bold;
        border: 1px solid ;
        background: #fff;
        transition: transform 0.2s;
        color: #000 !important;

    }

    /* Optional small scale effect on hover */
    #plotTableBody td:hover {

        cursor: pointer;
        padding: 15px;
        text-align: center;
        font-weight: bold;
        border: 1px solid;
        background: #fff;
        transition: transform 0.2s;
        color: #000;
    }

    /* Tooltip styling */
    #plotTooltip {
        display: none;
        position: absolute;
        background: #fff;
        border: 1px solid #ccc;
        padding: 0;
        z-index: 9999;
        font-size: 14px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.25);
        border-radius: 8px;
        pointer-events: none;
        max-width: 250px;
    }

    /* Legend styling */
    .plot-legend {
        display: flex;
        gap: 20px;
        margin-bottom: 15px;
        font-weight: bold;
    }

    .plot-legend span {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .plot-legend .available-box {
        width: 20px;
        height: 20px;
        background: #fff;
    }

    .plot-legend .booked-box {
        width: 20px;
        height: 20px;
        background: #D20001;
    }

    .plot-legend .hold-box {
        width: 20px;
        height: 20px;
        background: #FFFE00;
        
        
    }
    

    /* Responsive table */
    @media(max-width: 600px) {
        #plotTableBody td {
            padding: 10px;
            font-size: 12px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const plotData = window.plotData || {};
        const tds = document.querySelectorAll('#plotTableBody td');

        tds.forEach(td => {
            const plotNo = td.dataset.plot;
            const d = plotData[plotNo];

            if (d && d.plot_status) {
                const status = d.plot_status.toLowerCase();

                if (status === 'available') {
                    td.style.backgroundColor = '#fff';
                    td.style.color = '#000';
                } else if (status === 'booked') {
                    td.style.backgroundColor = '#D20001';
                    td.style.color = '#000';
                } else if (status === 'hold') {
                    td.style.backgroundColor = '#FFFE00';
                    td.style.color = '#000 !important';
                }
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tbody = document.getElementById('plotTableBody');
        const tooltip = document.getElementById('plotTooltip');
        const plotData = window.plotData || {};
        let count = 1;

        // Create 10x10 table
        for (let i = 0; i < 10; i++) {
            let tr = document.createElement('tr');
            for (let j = 0; j < 10; j++) {
                let td = document.createElement('td');
                td.dataset.plot = count;
                td.textContent = count;

                // Default background = Available
                td.style.backgroundColor = '#fff';
                td.style.color = '#fff';

                const d = plotData[count];
                if (d?.plot_status) {
                    const status = d.plot_status.toLowerCase();
                    if (status === 'booked') {
                        td.style.backgroundColor = '#D20001';
                        td.style.color = '#fff';
                    } else if (status === 'hold') {
                        td.style.backgroundColor = '#FFFE00';
                        td.style.color = '#000 !important';
                    }
                }


            }
            tbody.appendChild(tr);
        }

        // Tooltip functionality
        document.querySelectorAll('#plotTableBody td').forEach(td => {
            td.addEventListener('mouseenter', function(e) {
                const plotNo = this.dataset.plot;
                const d = plotData[plotNo];

                let statusColor = '#fff'; // default green
                let statusText = 'Available';

                if (d?.plot_status) {
                    const status = d.plot_status.toLowerCase();
                    if (status === 'booked') statusColor = '#D20001';
                    else if (status === 'hold') statusColor = '#FFFE00';
                    statusText = d.plot_status;
                }

                tooltip.innerHTML = `
                <div>
                    <div style="background:${statusColor};color:#000;border:1px solid #000;padding:6px 10px;font-weight:bold;">
                        Status - ${statusText}
                    </div>
                    <div style="padding:10px;">
                        <strong>Plot:</strong> ${plotNo}<br>
                        <strong>Area (Sq. Yard):</strong> ${d?.area_sq_yard || '-'}<br>
                        <strong>Area (Sq. Ft):</strong> ${d?.area_sq_ft || '-'}<br>
                       
                        <strong>Client:</strong> ${d?.client || 'N/A'}
                    </div>
                </div>
            `;
                tooltip.style.display = 'block';
            });

            td.addEventListener('mousemove', function(e) {
                tooltip.style.top = (e.pageY + 15) + 'px';
                tooltip.style.left = (e.pageX + 15) + 'px';
            });

            td.addEventListener('mouseleave', function() {
                tooltip.style.display = 'none';
            });
        });
    });
</script>






<!-- APP AD SECTION START -->
<div class="ul-app-ad wow animate__fadeInUp">
    <div class="ul-app-ad-container">
        <div class="ul-app-ad-content">
            <div class="row align-items-start gy-5">
                <!-- txt -->
                <div class="col-lg-7">
                    <div class="ul-app-ad-txt">
                        <a href="https://api.whatsapp.com/send?phone=917778011154&text=Hello!%20I%20just%20visited%20your%20website%20and%20I%20wanted%20to%20schedule%20a%20free%20consultation%20about%20Dholera%20and%20its%20Prime%20Locations%20and%20Transparent%20Land%20Prices"
                            target="_blank" style="text-decoration: none;">
                            <span class="ul-btn ul-blogs-heading-btn">Enquire Now</span>
                        </a>

                        <a href="https://api.whatsapp.com/send?phone=917778011154&text=Hello!%20I%20just%20visited%20your%20website%20and%20I%20wanted%20to%20schedule%20a%20free%20consultation%20about%20Dholera%20and%20its%20Prime%20Locations%20and%20Transparent%20Land%20Prices"
                            target="_blank" style="text-decoration: none; color: inherit;">
                            <h2 class="ul-section-title">
                                Get a Free Dholera Investment Consultation
                            </h2>
                        </a>

                    </div>
                </div>

                <!-- img -->
                <div class="col-lg-5">
                    <div class="ul-app-ad-imgs">

                        <div class="ul-app-ad-img">
                            <!-- app screenshot 2 -->
                            <img src="assets/img/app-ad-ss-2.jpg" alt="App Screenshot" class="ul-app-ad-ss-2">
                        </div>

                        <!-- vector -->
                        <img src="assets/img/app-ad-img-vector.svg" alt="vector" class="vector">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

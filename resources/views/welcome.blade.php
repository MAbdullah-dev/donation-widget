<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>donation widget</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="stylesheet" href="{{ asset('CSS/Header.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/Globalstyle.css') }}"> --}}
    @vite(['resources/css/app.css'])
</head>

<body>
    <header>
        <div class="inner">
            <div class="logo-img">
                <img src="{{ asset('svg/logo.svg') }}" alt="Logo">
            </div>
            <button class="hamburger" aria-label="Toggle Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav class="nav-links">
                <ul>
                    <li><a href="#">Find</a></li>
                    <li><a href="#">Become</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Sign In</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="donate-section">
        <div class="container">
            <div class="donate-inner">
                <div class="donate-head d-flex justify-content-between align-items-center">
                    <ul class="d-flex align-items-center list-unstyled m-0">
                        <li class="me-3">
                            <img src="{{ asset('images/Image-empty-state.avif') }}" alt="Night Bright Logo"
                                class="donate-logo rounded-circle">
                        </li>
                        <li>
                            <h3 class="donate-org-name mb-0">Night Bright</h3>
                            <div class="donate-location mt-4">
                                <h6 class="donate-region">North America</h6>
                                <h6 class="donate-country d-block">United States</h6>
                            </div>
                        </li>
                    </ul>
                    <div class="donate-button">
                        <button id="donate-btn" class="donate-btn">Donate <img src="{{ asset('svg/arrow.svg') }}"
                                alt=""></button>
                    </div>
                </div>

                <div class="donate-description mt-4">
                    <p class="donate-text mb-4">Night Bright is a non-profit 501(c)3. We strive to make donating to your
                        favorite causes an enjoyable experience that leads to a deeper connection with the thousands of
                        beautiful people spreading the love of God throughout the globe. Please join us in making it
                        easier to find, fund, and resource missions worldwide.</p>

                    <div class="donate-tabs">
                        <ul class="nav nav-tabs border-0 donate-tabs-list">
                            <li class="nav-item">
                                <a class="nav-link active donate-tab-link" href="#">Photos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link donate-tab-link" href="#">Video</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link donate-tab-link" href="#">Causes</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donation Form Overlay -->
    <div class="donation-form-overlay" id="donationOverlay">
        <div class="donation-form-container">
            <!-- Donation Form Content -->

            <div class="donation-form-content mx-auto" id="donationFormContent">
                <button class="close-btn">×</button>
                <h2><span>DONATE</span></h2>
                {{-- <h2>Missionary Donation</h2> --}}
                <div class="slide-wrapper">
                    <div class="wrapper-head">
                        <h3><b>Missionary Donation</b></h3>
                    </div>
                    <div class="wrapper-body">
                        <div class="donation-type-tabs">
                            <button class="tab-btn active" data-tab="one-time">One-Time</button>
                            <button class="tab-btn" data-tab="monthly">Monthly</button>
                        </div>

                        <form class="donation-form" id="donationForm">
                            <div class="form-inputs">
                                <div class="form-group">
                                    <input type="text" id="donor-name" placeholder="Donor's Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="donor-email" placeholder="Donor's Email" required>
                                </div>
                            </div>

                            {{-- <label class="section-label">Who are you donating to?</label> --}}
                            <div class="form-group">
                                <select id="missionary-select" class="missionary-select">
                                    <option value="">Night Bright</option>
                                    <option>Andrii Kuchkuda</option>
                                    <option>Annu ss</option>
                                    <option>Brandon Croley</option>
                                    <option>Chris Sheppler</option>
                                    <option>Dan Johnson</option>
                                    <option>Dave and Patti Schatzmann</option>
                                </select>
                            </div>

                            <div class="amount-options">
                                {{-- <label class="section-label">Donation Amount</label> --}}
                                <div class="amount-buttons">
                                    <button type="button" class="amount-btn active" data-amount="10">$10</button>
                                    <button type="button" class="amount-btn" data-amount="25">$25</button>
                                    <button type="button" class="amount-btn" data-amount="50">$50</button>
                                    <button type="button" class="amount-btn" data-amount="100">$100</button>
                                    <div class="custom-amount">
                                        <input type="number" id="custom-amount" min="1" placeholder="Other">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group message-group">
                                <button type="button" class="add-message-btn">+ Add a message</button>
                                <textarea id="donation-message" class="message-textarea" placeholder="Your message..." style="display: none;"></textarea>
                            </div>

                    </div>
                    <div class="form-footer">
                        <label class="checkbox-label">
                            <input type="checkbox" id="anonymous">
                            <span class="checkmark"></span>
                            Stay Anonymous
                        </label>

                        <button type="submit" class="submit-btn">Continue</button>
                    </div>
                    </form>
                </div>
            </div>

            <!-- Payment Details Content -->
            {{-- <div class="payment-details-content" id="paymentDetailsContent">
                <button class="close-btn">×</button>
                <h1>Final Details</h1>
                <h2>Donation</h2>

                <div class="payment-notice">
                    <strong>Credit card processing fees</strong>
                </div>
                <label class="section-label">payment method</label>
                <div class="form-group">
                    <select>
                        <option value="">stripe</option>
                    </select>
                </div>

                <label class="section-label">total</label>
                <div class="form-group">
                    <div class="payment-method">
                        <span id="payment-amount">$0.00</span>
                    </div>
                </div>

                <div class="disclaimer">
                    You pay the CC fee so 100% of your donation goes to your chosen missionary or cause.
                </div>

                <div class="divider"></div>

                <div class="tip-section">
                    <h3>Add a tip to support Night Bright</h3>
                    <p class="tip-description">
                        Why Tip? Night Bright does not charge any platform fees and relies on your generosity to support
                        this free service.
                    </p>

                    <div class="form-group">
                        <label class="checkbox-label">
                            <input type="checkbox" id="allow-contact">
                            <span class="checkmark"></span>
                        </label>

                    </div>

                    <div class="tip-options">
                        <button type="button" class="tip-btn active">12%</button>
                        <button type="button" class="tip-btn">15%</button>
                        <button type="button" class="tip-btn">18%</button>
                        <button type="button" class="tip-btn">Custom</button>
                    </div>
                </div>

                <div class="payment-footer">
                    <button type="button" class="back-btn" id="backButton">Back</button>
                    <button type="button" class="finish-btn" id="finishButton">Finish (<span
                            id="final-amount">$0</span>)</button>
                </div>
            </div> --}}
            {{-- <div class="payment-details-content" id="paymentDetailsContent">
                <div class="payment-head">
                    <h3>Final Details</h3>
                </div>
                <div class="payment-body">
                    <div class="title">
                        <h4>Donation</h4>
                        <span>*$25</span>
                    </div>
                    <div class="detail">
                        <h4>Credit card processing fees</h4>
                        <div class="input-wrapper">
                            <select name="" id="">
                                <option value="">AMEX Card</option>
                                <option value="">Visa $ Others</option>
                                <option value="">US Bank Account</option>
                                <option value="">Cash App Pay</option>
                            </select>
                            <span>$0.00</span>
                        </div>
                        <p>You pay the CC fee so 100% of your donation goes to your chosen missionary or cause.</p>
                    </div>
                    <div class="description">
                        <div class="about">
                            <h4>Add a tip to support Night Bright</h4>
                            <p><a href="#">Why Tip?</a>Night Bright does not charge any platform fees and relies
                                on your generosity to
                                support this free service.</p>
                        </div>
                        <div class="tip-per">
                            <select name="" id="">
                                <option value="">0%</option>
                                <option value="">5%</option>
                                <option value="">10%</option>
                                <option value="">12%</option>
                                <option value="">15%</option>
                                <option value="" selected>20%</option>
                            </select>
                        </div>
                        <div class="authorized-wrapper">
                            <input type="checkbox">
                            <label for="">Allow Night Bright lnc to contact me</label>
                        </div>
                    </div>
                </div>
                <div class="payment-footer">
                    <button>Finish ($28.00)</button>
                </div>
            </div>
             --}}
            <div class="payment-details-content" id="paymentDetailsContent">
                <h2>Donate</h2>
                <button class="close-btn">×</button> <!-- Keep this to allow overlay close -->
                <div class="payment-wrapper">
                    <div class="payment-head">
                        <h3>Final Details</h3>
                    </div>
                    <div class="payment-body">
                        <div class="title">
                            <h5>Donation</h5>
                            <span id="payment-amount"><b>$0.00</b></span> <!-- ID retained for JS -->
                        </div>
                        <div class="detail">
                            <h6 class="mb-3">Credit card processing fees</h6>
                            <div class="input-wrapper form-group">
                                <select>
                                    <option value=""><b>Select Payment Method</b></option>
                                    <option value="">AMEX Card</option>
                                    <option value="">Visa & Others</option>
                                    <option value="">US Bank Account</option>
                                    <option value="">Cash App Pay</option>
                                </select>
                                <span><b>$0.00</b></span>
                            </div>
                            <p>You pay the CC fee so 100% of your donation goes to your chosen missionary or cause.</p>
                        </div>
                        <div class="description">
                            <div class="about">
                                <h5>Add a tip to support Night Bright</h5>
                                <p>
                                    <a href="#">Why Tip?</a>
                                    Night Bright does not charge any platform fees and relies on your generosity to
                                    support
                                    this free service.
                                </p>
                            </div>
                            <div class="tip-per form-group">
                                <select id="tip-select"> <!-- You can update your JS to read this -->
                                    <option value="0">0%</option>
                                    <option value="5">5%</option>
                                    <option value="10">10%</option>
                                    <option value="12">12%</option>
                                    <option value="15">15%</option>
                                    <option value="20" selected>20%</option>
                                </select>
                            </div>
                        </div>
                        <div class="authorized-wrapper">
                            <input type="checkbox" id="allow-contact">
                            <label for="allow-contact">Allow Night Bright Inc to contact me</label>
                        </div>
                    </div>
                    <div class="payment-footer">
                        <button type="button" class="back-btn" id="backButton">Back</button>
                        <button type="button" class="finish-btn" id="finishButton">Finish (<span
                                id="final-amount">$0.00</span>)</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Load Stripe.js -->
    <script src="https://js.stripe.com/v3/"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Stripe with your publishable key
            const stripe = Stripe('{{ env('STRIPE_KEY') }}');
            let selectedAmount = 0;
            let selectedMissionary = '';
            let isProcessing = false;

            // Overlay toggle
            const donateBtn = document.getElementById('donate-btn');
            const overlay = document.getElementById('donationOverlay');
            const closeBtns = document.querySelectorAll('.close-btn');

            // Form elements
            const donationForm = document.getElementById('donationForm');
            const donationFormContent = document.getElementById('donationFormContent');
            const paymentDetailsContent = document.getElementById('paymentDetailsContent');
            const backButton = document.getElementById('backButton');
            const finishButton = document.getElementById('finishButton');
            const missionarySelect = document.getElementById('missionary-select');
            const tabButtons = document.querySelectorAll('.tab-btn');


            // Amount selection
            const amountBtns = document.querySelectorAll('.amount-btn');
            const customAmount = document.getElementById('custom-amount');
            const paymentAmount = document.getElementById('payment-amount');
            const finalAmount = document.getElementById('final-amount');

            // Tip selection
            const tipBtns = document.querySelectorAll('.tip-btn');
            let selectedTipPercentage = 12; // Default to 12%

            // Open overlay
            if (donateBtn) {
                donateBtn.addEventListener('click', function() {
                    overlay.classList.add('active');
                    document.body.style.overflow = 'hidden';
                });
            }

            // Close overlay
            closeBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    overlay.classList.remove('active');
                    document.body.style.overflow = '';
                    resetForms();
                });
            });

            // Close when clicking outside
            overlay.addEventListener('click', function(e) {
                if (e.target === overlay) {
                    overlay.classList.remove('active');
                    document.body.style.overflow = '';
                    resetForms();
                }
            });

            // Amount selection
            amountBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    amountBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    customAmount.value = '';
                    selectedAmount = parseFloat(this.dataset.amount);
                    updatePaymentAmounts();
                });
            });

            customAmount.addEventListener('input', function() {
                amountBtns.forEach(b => b.classList.remove('active'));
                selectedAmount = parseFloat(this.value) || 0;
                updatePaymentAmounts();
            });

            // Tip selection
            tipBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    tipBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    // Get the tip percentage from button text
                    const tipText = this.textContent;
                    if (tipText === 'Custom') {
                        // Handle custom tip (you might want to add an input for this)
                        selectedTipPercentage = 0;
                    } else {
                        selectedTipPercentage = parseInt(tipText.replace('%', ''));
                    }

                    updatePaymentAmounts();
                });
            });

            // Missionary selection
            missionarySelect.addEventListener('change', function() {
                selectedMissionary = this.value;
            });

            // Form submission
            donationForm.addEventListener('submit', function(e) {
                e.preventDefault();

                if (selectedAmount <= 0) {
                    alert('Please select a donation amount');
                    return;
                }

                if (!selectedMissionary) {
                    alert('Please select a missionary');
                    return;
                }

                // Update payment details with selected amount
                updatePaymentAmounts();

                // Switch to payment details screen
                donationFormContent.style.display = 'none';
                paymentDetailsContent.style.display = 'block';
            });

            // Back button
            backButton.addEventListener('click', function() {
                paymentDetailsContent.style.display = 'none';
                donationFormContent.style.display = 'block';
            });

            // Finish button - Stripe integration
            finishButton.addEventListener('click', async function() {
                if (isProcessing) return;

                if (selectedAmount <= 0) {
                    alert('Please select a donation amount');
                    return;
                }

                // Calculate total amount (donation + tip)
                const tipAmount = selectedAmount * (selectedTipPercentage / 100);
                const totalAmount = Math.round((selectedAmount + tipAmount) * 100); // Convert to cents

                try {
                    isProcessing = true;
                    finishButton.disabled = true;
                    finishButton.innerHTML = 'Processing <span class="loading"></span>';

                    // Create checkout session
                    const response = await fetch("{{ route('create-checkout-session') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}",
                            "Accept": "application/json"
                        },
                        body: JSON.stringify({
                            amount: totalAmount,
                            missionary: selectedMissionary,
                            donor_name: document.getElementById('donor-name').value,
                            donor_email: document.getElementById('donor-email').value,
                            is_anonymous: document.getElementById('anonymous').checked,
                            message: document.getElementById('donation-message').value
                        })
                    });

                    const data = await response.json();

                    if (data.error) {
                        throw new Error(data.error);
                    }

                    // Redirect to Stripe Checkout
                    const result = await stripe.redirectToCheckout({
                        sessionId: data.sessionId
                    });

                    if (result.error) {
                        throw new Error(result.error.message);
                    }
                } catch (error) {
                    console.error("Error:", error);
                    alert("An error occurred: " + error.message);
                    finishButton.disabled = false;
                    finishButton.textContent = `Finish ($${selectedAmount.toFixed(2)})`;
                    isProcessing = false;
                }
            });

            // Helper function to update payment amounts display
            function updatePaymentAmounts() {
                const tipAmount = selectedAmount * (selectedTipPercentage / 100);
                const totalAmount = selectedAmount + tipAmount;

                paymentAmount.textContent = `$${selectedAmount.toFixed(2)}`;
                finalAmount.textContent = `$${totalAmount.toFixed(2)}`;
            }

            // Reset forms
            function resetForms() {
                donationForm.reset();
                amountBtns.forEach(b => b.classList.remove('active'));
                tipBtns[0].classList.add('active'); // Reset to 12% tip
                selectedTipPercentage = 12;
                customAmount.value = '';
                selectedAmount = 0;
                selectedMissionary = '';
                document.getElementById('donation-message').style.display = 'none';
                donationFormContent.style.display = 'block';
                paymentDetailsContent.style.display = 'none';

                if (finishButton) {
                    finishButton.disabled = false;
                    finishButton.innerHTML = `Finish ($0)`;
                }

                isProcessing = false;
            }
            tabButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    tabButtons.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>
</body>

</html>

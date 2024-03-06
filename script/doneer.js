function doneer() {
    // Create the donation prompt HTML structure
    let donationPrompt = `
    <div id="donate">
        <div class="donation-wrapper">
            <h1>Bedankt dat je wilt doneren!</h1>
            <h2>Hoeveel wilt u doneren?</h2>
            <div class="donation-options">
                <div class="donation-option" onclick="donateAmount(1)" id="1euro">€ 1</div>
                <div class="donation-option" onclick="donateAmount(5)" id="5euro">€ 5</div>
                <div class="donation-option" onclick="donateAmount(10)" id="10euro">€ 10</div>
                <div class="donation-option" onclick="donateAmount(25)" id="25euro">€ 25</div>
                <div class="custom-donation">
                    <input type="number" id="custom-amount" placeholder="Custom amount">
                    <button onclick="donateCustomAmount()">Doneren</button>
                </div>
            </div>
        </div>
    </div>
    `;

    // Append the donation prompt to the body
    document.body.insertAdjacentHTML('beforeend', donationPrompt);
}

function donateAmount(amount) {
    // Remove 'don_select' class from all donation options
    let donationOptions = document.querySelectorAll('.donation-option');
    donationOptions.forEach(option => option.classList.remove('don_select'));

    // Add 'don_select' class to the selected donation option
    let selectedOption = document.getElementById(amount + 'euro');
    selectedOption.classList.add('don_select');

    // Optionally, hide the donation prompt after a selection is made
    let donateDiv = document.getElementById('donate');
    window.alert("Bedankt voor uw donatie!")
    donateDiv.style.display = 'none';
}

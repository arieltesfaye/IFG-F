document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('donationForm');
    const customAmount = document.getElementById('customAmount');
    const donationOptions = document.querySelectorAll('input[name="amount"]');
    
    // Handle radio button selection
    donationOptions.forEach(option => {
        option.addEventListener('change', function() {
            if (this.checked) {
                customAmount.value = ''; // Clear custom amount when preset amount is selected
                updateDonateButton(this.value);
            }
        });
    });
    
    // Handle custom amount input
    customAmount.addEventListener('input', function() {
        // Uncheck all radio buttons when custom amount is entered
        donationOptions.forEach(option => option.checked = false);
        updateDonateButton(this.value);
    });
    
    // Update donate button text
    function updateDonateButton(amount) {
        const buttonText = document.querySelector('.button-text');
        if (amount && amount > 0) {
            buttonText.textContent = `Donate $${amount}`;
        } else {
            buttonText.textContent = 'Donate Now';
        }
    }
    
    // Form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get selected amount (either from radio buttons or custom input)
        let selectedAmount = customAmount.value;
        donationOptions.forEach(option => {
            if (option.checked) {
                selectedAmount = option.value;
            }
        });
        
        // Add animation to button
        const button = form.querySelector('.donate-button');
        button.style.transform = 'scale(0.95)';
        setTimeout(() => {
            button.style.transform = '';
        }, 200);
        
        // Here you would typically integrate with a payment processor
        console.log('Processing donation of $' + selectedAmount);
        alert('Thank you for your donation of $' + selectedAmount + '!');
    });
    
    // Initialize with first option selected
    const firstOption = document.querySelector('input[name="amount"]');
    if (firstOption) {
        firstOption.checked = true;
        updateDonateButton(firstOption.value);
    }
    
    // Add hover effect to donation options
    const optionLabels = document.querySelectorAll('.donation-option');
    optionLabels.forEach(label => {
        label.addEventListener('mouseover', function() {
            this.style.transform = 'translateY(-2px)';
        });
        
        label.addEventListener('mouseout', function() {
            this.style.transform = '';
        });
    });
});
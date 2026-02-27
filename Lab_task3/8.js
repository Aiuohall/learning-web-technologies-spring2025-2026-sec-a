document.querySelector('input[value="Submit"]').addEventListener('click', function() {
    let isValid = true;
    const errors = [];
    

    const nameInput = document.querySelector('input[type="text"]:nth-of-type(1)');
    const nameValue = nameInput.value.trim();
    if (nameValue === '') 
        {

        errors.push('Name cannot be empty');
        isValid = false;
    } 
    else
         {
  const words = nameValue.split(/\s+/);
        if (words.length < 2)
             {
 
                errors.push('Name must contain at least two words');
            isValid = false;
        } 
        else if (!/^[a-zA-Z][a-zA-Z.\s-]*$/.test(nameValue))
             {
 errors.push('Name must start with letter and contain only letters, dots, dashes, spaces');

            isValid = false;
        }
    }
    




    const emailInput = document.querySelector('input[type="email"]');
    const emailValue = emailInput.value.trim();
    if (emailValue === '') 
        {
        errors.push('Email cannot be empty');
  isValid = false;
    } 
    else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailValue))
         {
    errors.push('Email must be valid format');
        isValid = false;
    }
    

    const genderRadios = document.querySelectorAll('input[name="Gender"]');
    let genderSelected = false;
    genderRadios.forEach(radio => 
        {
        if (radio.checked) genderSelected = true;
    });
    if (!genderSelected) 
        {
        errors.push('Please select a gender');
        isValid = false;
    }
    

    const dateInput = document.querySelector('input[type="date"]');
    if (!dateInput.value) {
        errors.push('Date of birth cannot be empty');
        isValid = false;
    } else {
        const date = new Date(dateInput.value + 'T00:00:00');
        const day = date.getDate();
        const month = date.getMonth() + 1;
        const year = date.getFullYear();
        if (day < 1 || day > 31 || month < 1 || month > 12 || year < 1900 || year > 2016) {
            errors.push('Date must be valid (1900-2016)');
            isValid = false;
        }
    }

    const bloodGroupSelect = document.querySelector('select[name="Blood Group"]');
    if (!bloodGroupSelect.value) {
        errors.push('Please select a blood group');
        isValid = false;
    }
    

    const degreeCheckboxes = document.querySelectorAll('td:nth-child(2) input[type="checkbox"]');
    let degreeSelected = false;
    degreeCheckboxes.forEach(cb => 
        {
        if (cb.checked) degreeSelected = true;
    });
    if (!degreeSelected) {
        errors.push('Please select at least one degree');
        isValid = false;
    }
    

    const photoInput = document.querySelector('input[type="file"]');
    if (!photoInput.files || photoInput.files.length === 0) {
        errors.push('Please select a photo');
        isValid = false;
    }
    

    if (isValid) {
        alert('Form submitted successfully! ');
    } else {
        alert(' errors:\n' + errors.join('\n'));
    }
    

    document.querySelector('table').style.borderColor = isValid ? 'green' : 'red';
}); 
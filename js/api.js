const apiToken = 'haJVN65YP0IVrY-cciZjmnfh99P0zoH6E62khUUIPniB-IEhQ9OT2N0fjVFsNmU3oRA';
const userEmail = 'info@iceilsystems.com';

let accessToken;

function getAuthToken() {
    return $.ajax({
        url: "https://www.universal-tutorial.com/api/getaccesstoken",
        method: "GET",
        headers: {
            "api-token": apiToken,
            "user-email": userEmail
        }
    });
}

function fetchCountries() {
    return getAuthToken()
        .then(data => {
            accessToken = data.auth_token;
            return $.ajax({
                url: "https://www.universal-tutorial.com/api/countries",
                method: "GET",
                headers: {
                    "Authorization": "Bearer " + accessToken
                }
            });
        });
}

function fetchStates(countryName) {
    return $.ajax({
        url: `https://www.universal-tutorial.com/api/states/${encodeURIComponent(countryName)}`,
        method: "GET",
        headers: {
            "Authorization": "Bearer " + accessToken
        }
    });
}

function fetchCities(stateName) {
    return $.ajax({
        url: `https://www.universal-tutorial.com/api/cities/${encodeURIComponent(stateName)}`,
        method: "GET",
        headers: {
            "Authorization": "Bearer " + accessToken
        }
    });
}

function loadCountries() {
    fetchCountries()
        .then(countries => {
            $('.country').empty().append('<option value="">Select Country</option>');
            countries.forEach(country => {
                $('.country').append(`<option value="${country.country_name}">${country.country_name}</option>`);
            });
            $('.country').select2();
        })
        .catch(error => console.error('Error loading countries:', error));
}

function loadStates(countryName) {
    fetchStates(countryName)
        .then(states => {
            $('.state').empty().append('<option value="">Select State</option>');
            states.forEach(state => {
                $('.state').append(`<option value="${state.state_name}">${state.state_name}</option>`);
            });
            $('.state').select2().prop('disabled', false);
        })
        .catch(error => console.error('Error loading states:', error));
}

function loadCities(stateName) {
    fetchCities(stateName)
        .then(cities => {
            $('.city').empty().append('<option value="">Select City</option>');
            cities.forEach(city => {
                $('.city').append(`<option value="${city.city_name}">${city.city_name}</option>`);
            });
            $('.city').select2().prop('disabled', false);
        })
        .catch(error => console.error('Error loading cities:', error));
}

$(document).ready(function() {
    loadCountries();

    $('.country').on('change', function() {
        const selectedCountry = $(this).val();
        if (selectedCountry) {
            loadStates(selectedCountry);
        } else {
            $('.state').empty().append('<option value="">Select State</option>').prop('disabled', true);
            $('.city').empty().append('<option value="">Select City</option>').prop('disabled', true);
        }
    });

    $('.state').on('change', function() {
        const selectedState = $(this).val();
        if (selectedState) {
            loadCities(selectedState);
        } else {
            $('.city').empty().append('<option value="">Select City</option>').prop('disabled', true);
        }
    });
});



arr = [];

function takeCredit() {
    arr.push("Взять кредит");
    $.ajax({
		type: 'POST',
        url: '../php/form.php',
		success: function(response) { 
            $('#myModal').modal('show');
            $('.modal-body').html(response);
            $('.modal-title').html("Вы являетесь физическим или юридическим лицом?");  
    },
    error: function (jqXHR, exception) {
        let msg = '';
        if (jqXHR.status === 0) {
            msg = 'Проверьте соединение с сетью.';
        } else if (jqXHR.status == 404) {
            msg = 'Страница не найдена. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Внутренняя ошибка сервера [500].';
        } else if (exception === 'parsererror') {
            msg = 'Запрошенный JSON не выполнен.';
        } else if (exception === 'timeout') {
            msg = 'Ошибка тайм-аута.';
        } else if (exception === 'abort') {
            msg = 'Ajax-запрос прерван.';
        } else {
            msg = 'Неперехваченная ошибка.\n' + jqXHR.responseText;
        }
    }
}); 
}

function openDeposit() {
    arr.push("Открыть вклад");
    $.ajax({
		type: 'POST',
        url: '../php/form.php',
		success: function(response) { 
            $('#myModal').modal('show');
            $('.modal-body').html(response);  
            $('.modal-title').html("Вы являетесь физическим или юридическим лицом?"); 
    },
    error: function (jqXHR, exception) {
        let msg = '';
        if (jqXHR.status === 0) {
            msg = 'Проверьте соединение с сетью.';
        } else if (jqXHR.status == 404) {
            msg = 'Страница не найдена. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Внутренняя ошибка сервера [500].';
        } else if (exception === 'parsererror') {
            msg = 'Запрошенный JSON не выполнен.';
        } else if (exception === 'timeout') {
            msg = 'Ошибка тайм-аута.';
        } else if (exception === 'abort') {
            msg = 'Ajax-запрос прерван.';
        } else {
            msg = 'Неперехваченная ошибка.\n' + jqXHR.responseText;
        }
    }
}); 
}

function physical() {
    $.ajax({
		type: 'POST',
        url: '../php/filling_form.php',
		success: function(response) { 
            $('#myModal').modal('show');
            $('.modal-body').html(response);  
            $('.modal-title').html("Заполните форму"); 
            document.getElementById("organization_name").required = false;
            document.getElementById("address").required = false;
            document.getElementById("ogrn").required = false;
            document.getElementById("organization_inn").required = false;
            document.getElementById("kpp").required = false;
            document.getElementById("bet").required = false;
            document.getElementById("capitalization_frequency").required = false;
            $('.director_data').hide();
            $('.legalEntityInfo').hide();
            if(arr[arr.length - 1] == 'Взять кредит') {
                document.getElementById("bet").required = false;
                document.getElementById("capitalization_frequency").required = false;
                $('.deposit_data').hide();
                $('.organization_data').hide();
            }
            if(arr[arr.length - 1] == 'Открыть вклад') {
                $('.organization_data').hide();
                document.getElementById("bet").required = true;
                document.getElementById("capitalization_frequency").required = true;
            }
    },
    error: function (jqXHR, exception) {
        let msg = '';
        if (jqXHR.status === 0) {
            msg = 'Проверьте соединение с сетью.';
        } else if (jqXHR.status == 404) {
            msg = 'Страница не найдена. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Внутренняя ошибка сервера [500].';
        } else if (exception === 'parsererror') {
            msg = 'Запрошенный JSON не выполнен.';
        } else if (exception === 'timeout') {
            msg = 'Ошибка тайм-аута.';
        } else if (exception === 'abort') {
            msg = 'Ajax-запрос прерван.';
        } else {
            msg = 'Неперехваченная ошибка.\n' + jqXHR.responseText;
        }
    }
}); 
}

function legalEntity() {
    $.ajax({
		type: 'POST',
        url: '../php/filling_form.php',
		success: function(response) { 
            $('#myModal').modal('show');
            $('.modal-body').html(response); 
            $('.modal-title').html("Заполните форму");  
            document.getElementById("birth_date").required = false;
            document.getElementById("series").required = false;
            document.getElementById("number").required = false;
            document.getElementById("issue_date").required = false;
            $('.physical_client').hide();
            $('.physical_info').hide();
            if(arr[arr.length - 1] == 'Открыть вклад') {
                document.getElementById("sum").required = false;
                $('.sum').hide();
            }
            
            if(arr[arr.length - 1] == 'Взять кредит') {
                $('.deposit_data').hide();
                $('.organization_data').hide();
            }
    },
    error: function (jqXHR, exception) {
        let msg = '';
        if (jqXHR.status === 0) {
            msg = 'Проверьте соединение с сетью.';
        } else if (jqXHR.status == 404) {
            msg = 'Страница не найдена. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Внутренняя ошибка сервера [500].';
        } else if (exception === 'parsererror') {
            msg = 'Запрошенный JSON не выполнен.';
        } else if (exception === 'timeout') {
            msg = 'Ошибка тайм-аута.';
        } else if (exception === 'abort') {
            msg = 'Ajax-запрос прерван.';
        } else {
            msg = 'Неперехваченная ошибка.\n' + jqXHR.responseText;
        }
    }
}); 
}

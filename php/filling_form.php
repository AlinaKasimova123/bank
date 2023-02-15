<form action="php/sendToDB.php" method="post" class="needs-validation" style="text-align: center;" novalidate>
        <h4 class="physical_client">Клиент(физическое лицо)</h4>
        <h4 class="director_data" id="director_data">Данные руководителя</h4>
        <!-- ФИО -->
        <div class="input-group input-group-icon">
            <input type="text" placeholder="ФИО" name="fio" id="fio" required>
            <div class="input-icon"><i class="fa fa-user"></i></div>
            <div class="valid-feedback">
              Данные заполнены верно!
            </div>
            <div class="invalid-feedback">
              Укажите ФИО.
            </div>
        </div>
        <!-- ИНН -->
    <div class="input-group input-group-icon">
        <input type="text" placeholder="ИНН" name="person_inn" id="person_inn" required>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
        <div class="valid-feedback">
          Данные заполнены верно!
        </div>
        <div class="invalid-feedback">
          Укажите ИНН.
        </div>
    </div>

    <div class="physical_info">
    <!-- Дата рождения -->
    <div class="row">
      <div>
        <div class="input-group">
        <input type="text" placeholder="Дата рождения" name="birth_date" id="birth_date" onfocus="(this.type='date')" required>
        <div class="valid-feedback">
          Данные заполнены верно!
        </div>
        <div class="invalid-feedback">
          Укажите дату рождения.
        </div>
    </div>
        </div>
        <script>
          date = new Date();
           if ( (this.day < date.getDate() && this.month <= date.getMonth() ) || this.month < date.getMonth()) ) {
        console.log("")
    }
        </script>

        <!-- Паспортные данные -->
        <div class="row">
        <h4 class="passport_data">Паспортные данные</h4>
        <h4 class="organization_data">Данные организации</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" placeholder="Серия" name="series" id="series" required>
            <div class="valid-feedback">
          Данные заполнены верно!
        </div>
        <div class="invalid-feedback">
          Укажите серию паспорта.
        </div>
          </div>
          <div class="col-third">
            <input type="text" placeholder="Номер" name="number" id="number" required>
            <div class="valid-feedback">
          Данные заполнены верно!
        </div>
        <div class="invalid-feedback">
          Укажите номер паспорта.
        </div>
          </div>
          <div class="col-third">
            <input type="text" placeholder="Дата выдачи" name="issue_date" id="issue_date" onfocus="(this.type='date')" required>
            <div class="valid-feedback">
          Данные заполнены верно!
        </div>
        <div class="invalid-feedback">
          Укажите дату выдачи паспорта.
        </div>
          </div>
        </div>
        </div>
        <div>
</div>
</div>
</div>

<div class="legalEntityInfo">
      <!-- Наименование организации -->
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Наименование организации" name="organization_name" id="organization_name" required>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
        <div class="valid-feedback">
          Данные заполнены верно!
        </div>
        <div class="invalid-feedback">
          Укажите наименование организации.
        </div>
    </div>

    <!-- Адрес организации -->
    <div class="input-group input-group-icon">
        <input type="text" placeholder="Адрес" name="address" id="address" required>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
        <div class="valid-feedback">
          Данные заполнены верно!
        </div>
        <div class="invalid-feedback">
          Укажите адрес организации.
        </div>
    </div>
  <!-- ОГРН -->
    <div class="input-group input-group-icon">
        <input type="text" placeholder="ОГРН" name="ogrn" id="ogrn" required>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
        <div class="valid-feedback">
          Данные заполнены верно!
        </div>
        <div class="invalid-feedback">
          Укажите ОГРН организации.
        </div>
    </div>

    <!-- ИНН -->
    <div class="input-group input-group-icon">
        <input type="text" placeholder="ИНН" name="organization_inn" id="organization_inn" required>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
        <div class="valid-feedback">
          Данные заполнены верно!
        </div>
        <div class="invalid-feedback">
          Укажите ИНН организации.
        </div>
    </div>

    <!-- КПП -->
    <div class="input-group input-group-icon">
        <input type="text" placeholder="КПП" name="kpp" id="kpp" required>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
        <div class="valid-feedback">
          Данные заполнены верно!
        </div>
        <div class="invalid-feedback">
          Укажите КПП организации.
        </div>
    </div>
</div>

         <!-- Дата открытия/закрытия -->
         <div class="row">
        <h4>Дата открытия/закрытия</h4>
        <div class="input-group">
          <div class="col-half">
            <input type="text" placeholder="Дата открытия" name="opening_date" id="opening_date" onfocus="(this.type='date')" required>
            <div class="valid-feedback">
          Данные заполнены верно!
        </div>
        <div class="invalid-feedback">
          Укажите дату открытия.
        </div>
          </div>
          <div class="col-half">
            <input type="text" placeholder="Дата закрытия" name="closing_date" id="closing_date" onfocus="(this.type='date')" required>
            <div class="valid-feedback">
          Данные заполнены верно!
        </div>
        <div class="invalid-feedback">
          Укажите дату закрытия.
        </div>
          </div>
        </div>
        </div>
</div>
        <!-- Срок в месяцах -->
        <div class="input-group input-group-icon">
        <input type="number" placeholder="Срок(в месяцах)" name="term" id="term" required>
        <div class="input-icon"><i class="fa-sharp fa-solid fa-calendar-day"></i></div>
        <div class="valid-feedback">
          Данные заполнены верно!
        </div>
        <div class="invalid-feedback">
          Укажите срок(в месяцах).
        </div>
    </div>

    <div class="sum">
    <!-- Сумма -->
    <div class="input-group input-group-icon">
        <input type="text" placeholder="Сумма" name="sum" id="sum" required>
        <div class="input-icon"><i class="fa-sharp fa-solid fa-money-bill"></i></div>
        <div class="valid-feedback">
          Данные заполнены верно!
        </div>
        <div class="invalid-feedback">
          Укажите сумму.
        </div>
    </div>
</div>

<div class="deposit_data">
  <!-- Ставка --> 
<div class="input-group input-group-icon">
        <input type="text" placeholder="Ставка" name="bet" id="bet" required>
        <div class="input-icon"><i class="fa-sharp fa-solid fa-money-bill"></i></div>
        <div class="valid-feedback">
          Данные заполнены верно!
        </div>
        <div class="invalid-feedback">
          Укажите ставку.
        </div>
    </div>
    <!-- Периодичность капитализации -->
    <div class="input-group input-group-icon">
        <input type="text" placeholder="Периодичность капитализации" name="capitalization_frequency" id="capitalization_frequency" required>
        <div class="input-icon"><i class="fa-sharp fa-solid fa-money-bill"></i></div>
        <div class="valid-feedback">
          Данные заполнены верно!
        </div>
        <div class="invalid-feedback">
          Укажите периодичность капитализации.
        </div>
    </div>
</div>

    <div class="row">
      <label for="terms">Я принимаю условия и подтверждаю, что ознакомился c политикой конфиденциальности.</label>
        </div>
        <button type="submit" class="btn btn-warning">Отправить</button>
    </form>

    <script>
  (function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')

  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
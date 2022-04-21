<div class="row">
    <div class="col-sm-4  form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        <label for="name" class="control-label">Nome</label>

        <input type="text" name="name" id="name" class="form-control"
               required maxlength="255" minlength="5" autofocus
               placeholder="João Silva"
               title="Este campo é obrigatório e deve conter ao menos 5 caracteres"
               value="{{ old('name', $contact->name) }}">

        @include('common.form.errors', ['field' => 'name'])
    </div>

    <div class="col-sm-4 form-group {{ $errors->has('contact') ? 'has-error' : '' }}">
        <label for="contact" class="control-label">Contato</label>

        <input type="text" name="contact" id="contact" class="form-control mask-digits"
               required
               pattern="\d*"
               maxlength="9" minlength="9"
               placeholder="123456789"
               value="{{ old('contact', $contact->contact) }}">

        @include('common.form.errors', ['field' => 'contact'])
    </div>

    <div class="col-sm-4 form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        <label for="email" class="control-label">E-mail</label>

        <input type="email" name="email" id="email" class="form-control"
               required
               placeholder="joaosilva@email.com"
               value="{{ old('email', $contact->email) }}">

        @include('common.form.errors', ['field' => 'email'])
    </div>
    
    
</div>

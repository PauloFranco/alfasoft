<div class="row">
    <div class="col-sm-4 form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        <label for="email" class="control-label">E-mail</label>

        <input type="email" name="email" id="email" class="form-control"
               required
               placeholder="joaosilva@email.com">

        @include('common.form.errors', ['field' => 'email'])
    </div>

    <div class="col-sm-4 form-group {{ $errors->has('password') ? 'has-error' : '' }}">
        <label for="password" class="control-label">Senha</label>

        <input type="password" name="password" id="password" class="form-control"
               required>

        @include('common.form.errors', ['field' => 'password'])
    </div>
    
    
</div>

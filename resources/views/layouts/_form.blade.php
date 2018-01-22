<form action="{{route('contato')}}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" placeholder="Escreva seu nome" id="nome" name="nome">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" placeholder="Escreva seu e-mail" id="email" name="email"> 
    </div>
    <div class="form-group">
        <label for="mensagem">Mensagem</label>
        <textarea class="form-control" rows="3" placeholder="Escreva sua mensagem" id="mensagem" name="mensagem"></textarea> 
    </div>
    <button type="submit" class="btn btn-danger">Enviar</button>
</form>
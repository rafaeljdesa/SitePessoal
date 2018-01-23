<form action="{{route('contato')}}" id="form-contato" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" placeholder="Escreva seu nome" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" placeholder="Escreva seu e-mail" id="email" name="email" required> 
    </div>
    <div class="form-group">
        <label for="mensagem">Mensagem</label>
        <textarea class="form-control" rows="3" placeholder="Escreva sua mensagem" id="mensagem" name="mensagem" required></textarea> 
    </div>
    <button type="submit" class="btn btn-danger">Enviar</button>
</form>


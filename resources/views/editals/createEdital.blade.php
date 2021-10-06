
<form action="/edital/store" method="POST" enctype="multipart/form-data">
    @csrf
    
    <span>Imagem</span>
    <input type="file" name="image">
    <br>
    <span>Arquivo</span>
    <input type="file" name="archive">
    <br>
    <input type="text" name="title">
    <br>
    <textarea name="description" cols="30" rows="10"></textarea>
    <br>
    <button type="submit">Enviar</button>
</form>

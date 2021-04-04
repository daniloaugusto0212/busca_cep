<!--Div for Background-->
<div class="bg text-center" id="address">
    <!--Div for Centered Text & Input-->
    <div class="centered">
        <p class="firstLine"> B &nbsp; U &nbsp; S &nbsp; C &nbsp; A &nbsp; . &nbsp; C &nbsp; E &nbsp; P </p>
        <p class="secondLine">Digite o Endereço para ver o CEP.</p>
        <p><input class="InputStyle" name="rua" type="text" id="logradouro" placeholder="Logradouro" size="60"/></p>
        <p><input class="InputStyle" name="bairro" type="text" id="bairro" size="40" placeholder="Bairro (opcional)"/></p>
        <p><input class="InputStyle" name="localidade" type="text" id="localidade" placeholder="Cidade" size="40"/></p>
        <p><input class="InputStyle" name="uf" type="text" id="uf" size="2" placeholder="UF"/></p>
    </div>
    
    <div class="form" id="form">
        <p style="color: white;">Resultado da Busca: </p>
        <form method="get" action=".">
            <div class="form-group">
                <input class="InputStyle" placeholder="CEP" type="text" id="cep">
                <i class="fas fa-copy" id="copyCep"></i>
            </div>
            
        </form>
    </div>
    <div class="box-alert copied"><i class="fa fa-check"></i>Copiado.</div>
    
    
</div>
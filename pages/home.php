<!--Div for Background-->
<div class="bg text-center">
    <!--Div for Centered Text & Input-->
    <div class="centered">
        <p class="firstLine"> B &nbsp; U &nbsp; S &nbsp; C &nbsp; A &nbsp; . &nbsp; C &nbsp; E &nbsp; P </p>
        <p class="secondLine">Digite o CEP para ver o endereço.</p>
        <p><input class="InputStyle" placeholder="CEP" type="text" id="cep"></p>
    </div>
    
    <div class="form" id="form">
        <p style="color: white;">Resultado da Busca: </p>
        <form method="get" action=".">
            <div class="form-group">
                <input class="InputStyle" name="rua" type="text" id="logradouro" size="60"/>
                <i class="fas fa-copy" id="copyRua"></i>
            </div>
            <div class="form-group">
                <input class="InputStyle" name="bairro" type="text" id="bairro" size="40"/>
                <i class="fas fa-copy" id="copyBairro"></i>
            </div>
            <div class="form-group">
                <input class="InputStyle" name="localidade" type="text" id="localidade" size="40"/>
                <i class="fas fa-copy" id="copyLocalidade"></i>
            </div>
            <div class="form-group">
                <input class="InputStyle" name="uf" type="text" id="uf" size="2"/>
                <i class="fas fa-copy" id="copyUf"></i>
            </div>
        </form>
    </div>
    <div class="box-alert copied"><i class="fa fa-check"></i>Copiado.</div>
    
    
</div>
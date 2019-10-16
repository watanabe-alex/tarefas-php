<!DOCTYPE HTML>
<html>
    <body>
        <form method="post" action="imprimir.php">
            Nome:​ <input type="text" name="nome">​<br>
            E-​​mail:​ <input type​="​text"​ name="email"><br>

            Como você ficou sabendo desse site?<br>
            <input type="checkbox" name="comoGoogle" value="google">Google<br>
            <input type="checkbox" name="comoInstagram" value="instagram">Instagram<br>
            <input type="checkbox" name="comoFacebook" value="facebook">Facebook<br>

            Gênero:<br>
            <input type="radio" name="genero" value="masculino">Masculino<br>
            <input type="radio" name="genero" value="feminino">Feminino<br>
            <input type="radio" name="genero" value="outro">Outro<br>

            Dormiu bem ontem?<br>
            <select name="dormiu">
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
                <option value=6>6</option>
                <option value=7>7</option>
                <option value=8>8</option>
                <option value=9>9</option>
                <option value=10>10</option>
            </select><br>

            <input type="checkbox" name="aceite" value="sim">Aceito termos e condições<br>

            <button ​type="submit">botao</button>
        </form>
    </body>
</html>
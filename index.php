<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lanchão da Bea</title>
</head>
<html>
    <body>
        <main>
            <div class="book-container">
                <div class="book-wrapper">
                    <div class="book-cover">
                        <div class="div">
                            <span>LANCHÃO DA</span>
                            <img src="src/images/logo.png" alt="Logo da Lanchonete - freepik">
                            <span>BEA</span>
                        </div>
                    </div>
                    <form action="process.php" method="post" class="book-content">
                        <div class="div dentro">
                            <span>MENU</span>
                            <div class="bebidas">
                                <span class="h5">BEBIDAS</span>
                                <div class="bebida">
                                    <span>Refrigerante lata</span>
                                    <span class="spacer"></span>
                                    <span>R$5,00</span>
                                    <div class="quantity">
                                        <input type="number" name="rl" min="0" placeholder="0" value="0">
                                    </div>
                                </div>
                                <div class="bebida">
                                    <span>Suco</span>
                                    <span class="spacer"></span>
                                    <span>R$7,50</span>
                                    <div class="quantity">
                                        <input type="number" name="suco" min="0" placeholder="0" value="0">
                                    </div>
                                </div>
                            </div>
                            <div class="lanches">
                                <span class="h5">LANCHES</span>
                                <div class="lanche">
                                    <span>X-salada</span>
                                    <span class="spacer"></span>
                                    <span>R$10,50</span> 
                                    <div class="quantity">
                                        <input type="number" name="x-salada" min="0" placeholder="0" value="0">
                                    </div>   
                                </div>
                                <div class="lanche">
                                    <span>X-burguer</span>
                                    <span class="spacer"></span>
                                    <span>R$12,00</span>  
                                    <div class="quantity">
                                        <input type="number" name="x-burguer" min="0" placeholder="0" value="0">
                                    </div>  
                                </div>
                                <div class="lanche">
                                    <span>X-egg</span>
                                    <span class="spacer"></span>
                                    <span>R$12,90</span> 
                                    <div class="quantity">
                                        <input type="number" name="x-egg" min="0" placeholder="0" value="0">
                                    </div>   
                                </div>
                                <div class="lanche">
                                    <span>X-calabresa</span>
                                    <span class="spacer"></span>
                                    <span>R$13,00</span> 
                                    <div class="quantity">
                                        <input type="number" name="x-calabresa" min="0" placeholder="0" value="0">
                                    </div>   
                                </div>
                                <div class="lanche">
                                    <span>X-bacon</span>
                                    <span class="spacer"></span>
                                    <span>R$14,00</span>
                                    <div class="quantity">
                                        <input type="number" name="x-bacon" min="0" placeholder="0" value="0">
                                    </div>    
                                </div>
                                <div class="lanche">
                                    <span>X-tudo</span>
                                    <span class="spacer"></span>
                                    <span>R$15,00</span>
                                    <div class="quantity">
                                        <input type="number" name="x-tudo" min="0" placeholder="0" value="0">
                                    </div>    
                                </div>
                            </div>
                            <div class="btns">
                                <input type="submit" value="Finalizar" class="btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>


# Pixel Kairos
API feita com Laravel para o Pixel Kairos. Repositório do front-end: https://github.com/gfktrin/Pixel-Kairos-React

## Modelagem
Por enquanto, o projeto se baseia no seguinte modelo de classes:

![alt text](https://i.imgur.com/IoZcwYT.png)

## Procedimento de upload no Hostgator
1. Toda a pasta local do projeto deve ser zipada e upada na pasta raíz do Hostgator. 
2. Por meio do gerenciador de arquivos do cpanel, localize o zip e extraia dentro da pasta `pixelKairos`, que também se encontra na raíz.
3. Crie uma cópia dos arquivos `server.php` e `public\index.php`
4. Edite a cópia do `server.php`, substituindo a palavra `public` por `api.pixelkairos.com.br`
5. Edite a cópia do `index.php`, substituindo o `..` por `../pixelKairos`
6. Copie os arquivos da pasta public que está dentro do projeto para a pasta `api.pixelkairos.com.br` no Hostgator.
7. Substitua o `server.php` da pasta `pixelKairos` do Hostgator pela cópia alterada.
8. Substitua o `index.php` da pasta `api.pixelkairos.com.br` do Hostgator pela cópia alterada.

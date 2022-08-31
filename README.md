<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Executando o projeto

<p>Instale o laravel em sua máquina <a href="https://laravel.com/docs/9.x/installation">Instalar o laravel 9</a></p>

<p>Clone este projeto acesse testeapi</p>

<p>Abra um terminal dentro da pasta testeapi</p>

<p>Execute o comando composer install (Ele instalará as dependências que você precisa pra rodar o projeto.)</p>

<p>Execute o comando php artisan migrate (Ele vai rodar as migrations que precisa no banco MYSQL.)</p>

## Polule a cidade e as marcas no seu MYSQL

<p>INSERT INTO `cidades` (`cod_cidade`, `nome_cidade`, `created_at`, `updated_at`) VALUES ('1', 'Araraquara', now(), now());</p>

<p>INSERT INTO `cidades` (`cod_cidade`, `nome_cidade`, `created_at`, `updated_at`) VALUES ('2', 'Araguari', now(), now());</p>

<p>INSERT INTO `marcas` (`cod_marca`, `nome_marca`, `created_at`, `updated_at`) VALUES ('1', 'teste1', now(), now());</p>

<p>INSERT INTO `marcas` (`cod_marca`, `nome_marca`, `created_at`, `updated_at`) VALUES ('2', 'teste1', now(), now());</p>

<p>Execute o comando php artisan serve (Ele vai abrir um servidor local para poder rodar a aplicação)</p>


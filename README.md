# shipsmart-desafio

### Iniciar o projeto

<p> Primeiro você terá que renomear o arquivo env.example e caso queira alterar alguma variavel fica a seu critério. </p>
<p> Após isso, rode o comando <code>docker-compose up -d</code> <br />
 em seguida, rode os seguintes comandos:<br /><br />
 <code>docker-compose run --rm composer install</code><br />
 <code>docker-compose run --rm artisan key:generate</code><br />
 <code>docker-compose run --rm artisan migrate</code><br />
</p>

### iniciar o front
<p>Entre na pasta frontend e rode os comandos <code> npm install && npm run dev</code> com isso o projeto já estará rodando localmente</p>


### itens concluidos

<ul>
<li>O campo de Estado, tem que ser um combobox/select; <span>&#9996;</span></li>
<li>Ao digitar um CEP, os demais campos devem ser preenchidos automaticamente com os
dados vindo de uma API de endereços externa. (Use esta aqui:
https://docs.awesomeapi.com.br/api-cep) <span>&#9996;</span></li>
<li>Os dados devem ser gravados em um banco de dados relacional (Sqlite); <strong>Aqui eu fiz com mysql, não consegui a tempo dockerizar a aplicação com o sqlite
a solução seria subir um banco fora do docker e acessar através das variaveis do proprio .env.</strong><span>&#10007;</span></li>
<li>Toda vez que um contato for cadastrado, envie um e-mail para um endereço que fica em
alguma variável no .env (use o Mailgun ou outro serviço similar)<strong>Aqui usei o proprio mailhog padrão do laravel</strong><span>&#9996;</span></li>
<li>Crie testes unitários no Laravel, que garanta que seu código esteja: cadastrando, atualizando,
deletando e listando; Pode ser apenas um teste para cada ação;<strong>nao consegui aplicar testes suficientes, me faltou estudar mais afundo</strong><span>&#10007;</span></li>
<li>Pode usar qualquer framework css que achar melhor;<strong>Aqui usei o tailwuind porque é o que mais harmoniza com vuejs 3</strong><span>&#9996;</span></li>
<li>Use código compatível com o PHP 8;<span>&#9996;</span></li>
</ul>

### Considerações finais

<p>Foi divertido o teste, fazia muito tempo que não mexia com vuejs, tive que reaprender bastante coisa, assim como tive que aprender tailwind css, pois ja sabia que
usar boostrap no vuejs 3 não seria uma opção muito viável, nos testes deixei a desejar, como nunca tinha trabalhado com testes antes, não consegui terminar a tempo de implementar
mas, aprendi bastante nesses últimos dias, foi um verdadeiro desafio</p>


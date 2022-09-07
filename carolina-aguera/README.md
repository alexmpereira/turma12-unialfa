- ## Repositório da Carolina Aguera
    - ## Aula de Tecnologias Emergentes - Professor Alex

> ## **Sobre:**
    >- ## My name is Carolina Aguera
    >- ## I have a 20 years old
    >- ## Atualmente sou Desenvolvedora FullStack na **[Gazin Tech](https://gazintech.com.br/)**
    >- ## _**[Linkedin](https://www.linkedin.com/in/carolina-aguera/)**_


### 1- Oque é container ?
- #### Container é um ambiente isolado, em um servidor, cada container possui uma funcionalidade e uma responsabilidade.
    - #### Caso um container sofra algum dano, o sistema não para, e ele é redirecionado para novo container.
    - #### São baseados em imagens, isso facilita o compartilhamento de uma aplicação ou conjunto de serviços, incluindo todas as dependências deles em vários ambientes.

### 2- Qual a diferença do Container para as Imagens ?
- #### A mesma imagem pode criar mais contêineres.
    - #### Cada imagem é definida por um Dockerfile, um arquivo de configuração que contém todos os comandos que um usuário precisa executar para modelar a imagem.
    - #### A imagem é um template que será utilizado por seu container. Nela é definido o que vai rodar ali dentro, quais as bibliotecas e configurações estarão presentes no seu container.

### 3- Qual comando temos que digitar no Shell para listar todos os containers
- #### docker ps 
    - #### Para listar os containers que estão rodando
- #### docker ps -a 
    - #### Para listar todos os containers até os parados
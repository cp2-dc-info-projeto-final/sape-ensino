# **Especificação de Casos de Uso**

# Sumário

- [CDU 01 - Cadastro do Aluno](#CDU-01---Cadastro-do-Aluno)
- [CDU 02 - Cadastro do professor](#CDU-02---Cadastro-do-professor)
- [CDU 03 - Login](#CDU-03---Login)
- [CDU 04 - Criação de uma grade de horários](#CDU-04---Criação-de-uma-grade-de-horários)

## Somente para Professores
- [CDU 05 - Criação de Turmas](#CDU-05---Criação-de-Turmas)
- [CDU 06 - Inserir conteúdo](#CDU-06---Inserir-conteúdo)
- [CDU 07 - Falar com um aluno](#CDU-07---Falar-com-um-aluno)
## Somente para Alunos
- [CDU 08 - Entrar em uma turma](#CDU-08---Entrar-em-uma-turma)
- [CDU 09 - Falar com um Professor](#CDU-09---Falar-com-um-Professor)


# Descrição
## CDU 01 - Cadastro do Aluno
**Atores:** Aluno

**Pré-condições:** Nenhuma

**Fluxo principal:**
1. ALuno - Inserir os dados de cadastramento.
2. Aluno - Selecionar a opção de conta aluno.
3. Sistema - Adicionar as informações no banco de dados.
   
## CDU 02 - Cadastro do professor
**Atores:** Professor

**Pré-condições:** Nenhuma

**Fluxo principal:**
1. Professor - Inserir os dados de cadastramento.
2. Professor - Selecionar a opção de conta aluno.
3. Sistema - Adicionar as informações no banco de dados.

## CDU 03 - Login
**Atores:** Usuário

**Pré-condições:** Estar cadastrado como aluno ou professor

**Fluxo principal:**
1. Usuário - Inserir email e senha
2. Sistema - Verifica as informações do usuário.

        1. Se os dados forem corretos, o sistema redireciona para a pagina inicial do usuário.
        2. Se os dados forem errados, o sistema avisa, "dados incorretos".

## CDU 04 - Criação de uma grade de horários
**Atores:** Usuário

**Pré-condições:** Estar cadastrado como aluno ou professor

**Fluxo principal:**
1. Usuário - Entrar na tela de sua grade de Horário
2. Usuário - Preencher o que irá fazer nos espaços de horários durante a semana
3. Sistema - Armazena os dados e deixa visualizável para o usuário.
4. Sistema - Notifica as tarefas 1 dia antes e 1 hora antes para o usuário.


# Casos de uso para o professor.

## CDU 05 - Criação de Turmas
**Atores:** Professor

**Pré-condições:** Estar logado no site

**Fluxo principal:**
1. Professor - Aperta no botão para criar uma turma, preenche o nome, adiciona as matérias e depois em "Criar Turma".
2. Sistema - Armazena os dados no banco de dados e cria a turma, um códido de aluno para essa turma, e um código de professor para cada matéria.

## CDU 06 - Inserir conteúdo
**Atores:** Professor

**Pré-condições:** Pertencer a uma turma

**Fluxo principal:**
1. Professor - Entra na sua matéria, e aperta para adicionar postagem.
2. Professor - Digita seu texto e anexa seus arquivos, e aperta em postar
3. Sistema - Adicionar as informações no banco de dados e torna disponível para todos os alunos dentro da turma, e para o próprio professor.

## CDU 07 - Falar com um aluno
**Atores:** Professor e Aluno

**Pré-condições:** Pertencer a uma turma

**Fluxo principal:**
1. Professor - Aperta em "Alunos", seleciona um e aperta em enviar mensagem.
2. Professor - Escreve sua mensagem e aperta em "enviar".
3. Sistema - Processa os dados e envia para o aluno.
4. Sistema - Notifica o aluno.
5. Aluno - Pode visualizar a mensagem ao entrar na turma do professor, e tem a opção de responder a mensagem.

# Casos de Uso do Aluno.

## CDU 08 - Entrar em uma turma
**Atores:** Aluno

**Pré-condições:** Estar logado no site como aluno

**Fluxo principal:**
1. Aluno - Aperta em entrar em turma e digita o código passado pelo professor
2. Sistema - Processa e verifica o código.
        
        1. Se o código existir, o sistema da acesso a turma para o aluno.
        2. Se o código nao existir, o aluno é avisado, "código inválido".
3. Sistema - Adiciona a nova turma na tela de Turmas do aluno.

## CDU 09 - Falar com um Professor
**Atores:** Professor e Aluno

**Pré-condições:** Pertencer a uma turma

**Fluxo principal:**
1. Aluno - Entrar na matéria do professor, e clicar em professores, e depois em, enviar uma mensagem
2. Aluno - Escreve sua mensagem e aperta em "enviar".
3. Sistema - Processa os dados e envia para o Professor.
4. Sistema - Notifica o Professor.
5. Professor - Pode visualizar a mensagem ao entrar na sua matéria, e tem a opção de responder a mensagem.



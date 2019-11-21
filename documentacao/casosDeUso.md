# **Especificação de Casos de Uso**

# Sumário

- [CDU 01 - Cadastro do Aluno](#CDU-01---Cadastro-do-Aluno)
- [CDU 02 - Cadastro do Docente](#CDU-02---Cadastro-do-Docente)
- [CDU 03 - Login](#CDU-03---Login)

## Somente para Docentes
- [CDU 04 - Criação de Turmas](#CDU-04---Criação-de-Turmas)
- [CDU 05 - Criação de Escola](#CDU-05---Criação-de-Escola)
- [CDU 06 - Inserir conteúdo](#CDU-06---Inserir-conteúdo)
- [CDU 07 - Entrar em uma Escola](#CDU-07---Entrar-em-uma-Escola)

## Somente para Alunos
- [CDU 08 - Entrar em uma turma](#CDU-08---Entrar-em-uma-turma)
- [CDU 09 - Entrar em uma Escola](#CDU-09---Entrar-em-uma-Escola)


# Descrição
## CDU 01 - Cadastro do Aluno
**Atores:** Aluno

**Pré-condições:** Nenhuma

**Fluxo principal:**
1. Aluno - Inserir os dados de cadastramento.
2. Aluno - Selecionar a opção de conta aluno.
3. Sistema - Adicionar as informações no banco de dados.

## CDU 02 - Cadastro do Docente
**Atores:** Docente

**Pré-condições:** Nenhuma

**Fluxo principal:**
1. Docente - Inserir os dados de cadastramento.
2. Docente - Selecionar a opção de conta docente.
3. Sistema - Adicionar as informações no banco de dados.

## CDU 03 - Login
**Atores:** Usuário

**Pré-condições:** Estar cadastrado como aluno ou docente

**Fluxo principal:**
1. Usuário - Inserir email e senha
2. Sistema - Verifica as informações do usuário.

        1. Se os dados forem corretos, o sistema redireciona para a pagina inicial do usuário.
        2. Se os dados forem errados, o sistema avisa, "dados incorretos".


# Casos de uso para o Docente.

## CDU 04 - Criação de Turmas
**Atores:** Professor

**Pré-condições:** Estar logado no site como docente

**Fluxo principal:**
1. Professor - Aperta no botão para criar uma turma, preenche o nome, adiciona as matérias e depois em "Criar Turma".
2. Sistema - Armazena os dados no banco de dados e cria a turma, um códido de aluno para essa turma, e um código de professor para cada matéria.

## CDU 05 - Criação de Escola
**Atores:** Docente

**Pré-condições:** Estar logado no site como docente

**Fluxo principal:**
1. Docente - Aperta no botão para cadastrar uma Escola, preenche o nome e os outros dados.
2. Sistema - Armazena os dados no banco de dados e cria a Escola, um códido de aluno para essa escola, e um código para outros docentes.

## CDU 06 - Inserir conteúdo
**Atores:** Docente

**Pré-condições:** Ter acesso de administrador a uma turma ou Escola

**Fluxo principal:**
1. Docente - aperta para adicionar postagem.
2. Professor - Digita seu texto e anexa seus arquivos, e aperta em postar.
3. Sistema - Adicionar as informações no banco de dados e torna disponível para todos os alunos e outros docentes dentro da turma ou escola, e para o próprio Docente.

## CDU 07 - Entrar em uma Escola
**Atores:** Docente  e Professor(outro docente)

**Pré-condições:** 
                
- Professor: Estar logado como docente e possuir o código de acesso para professores.
- Docente (Administrador da Escola): Estar logado como um docente e possuir acesso de administrador na Escola

**Fluxo principal:**
1. Professor - Aperta em entrar em uma Escola e digita o código passado pelo Docente.
2. Sistema - Processa e verifica o código.
        
        1. Se o código existir, o sistema envia uma solicitação para o Docente responsável pela escola.
        2. Se o código nao existir, o Professor é avisado, "código inválido".
3. Docente - Aceita a solicitação do Professor
4. Sistema - Permite o acesso da turma para o professor e adiciona a Escola na sua pagina principal.

# Casos de Uso do Aluno.

## CDU 08 - Entrar em uma turma
**Atores:** Aluno

**Pré-condições:** Estar logado no site como aluno

**Fluxo principal:**
1. Aluno - Aperta em entrar em turma e digita o código passado pelo professor
2. Sistema - Processa e verifica o código.
        
        1. Se o código existir, o sistema de acesso a turma para o aluno.
        2. Se o código nao existir, o aluno é avisado, "código inválido".
3. Sistema - Adiciona a nova turma na tela de Turmas do aluno.


## CDU 09 - Entrar em uma Escola
**Atores:** Aluno e Docente

**Pré-condições:** 
                
- Aluno: Estar logado como aluno e possuir o código de acesso.
- Docente: Estar logado como um docente e ter acesso de administrador de uma escola.

**Fluxo principal:**
1. Aluno - Aperta em entrar em uma Escola e digita o código passado pelo Docente
2. Sistema - Processa e verifica o código.
        
        1. Se o código existir, o sistema envia uma solicitação para o Docente responsável pela escola.
        2. Se o código nao existir, o aluno é avisado, "código inválido".
3. Docente - Aceita a solicitação do Aluno
4. Sistema - Permite o acesso da turma pelo aluno e adiciona a Escola na sua pagina inicial.
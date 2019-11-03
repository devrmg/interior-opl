<%@ page language="java" import="java.sql.*"  %>
<%

  // cria as variaveis  
  // e obtem os dados digitados pelo usuario
  String vnome  = request.getParameter( "input" ) ;
  String vendereco = request.getParameter( "input1")
  int    vcep = Integer.parseInt(request.getParameter( "number" )) ;
  int    vfone = Integer.parseInt(request.getParameter( "number1" )) ;
  String vmarca = request.getParameter( "select");
  String vmodelo = request.getParameter( "input3");
  String vdefeitos = request.getParameter( "checkbox[]");
  String vmensagem = request.getParameter( "textarea");

  
  // mostra na tela as informa��es
  //
  out.print( "Nome: "  +  vnome + "<br>") ;
  out.print( "Idade: "  +  vidade + "<br>") ;
  out.print( "Email: "  +  vemail + "<br>") ;

  // cria as variaveis para conexao com o banco de dados
  //
  String driver = "net.sourceforge.jtds.jdbc.Driver" ;
  String url     = "jdbc:jtds:sqlserver://10.4.0.90:1433/bdRA" ;
  String usuario = "bdRA" ;
  String senha   = "123456" ;

  // carrega o driver na mem�ria
  //
  Class.forName(driver) ;

  // cria a conexao com o banco
  //
  Connection conexao = DriverManager.getConnection(url,usuario,senha);

  // prepara o comondo para inserir 
  String sql = "INSERT INTO cadastro_m1 (nome,endereco,cep,fone,marca,modelo,defeitos,mensagem) VALUES ('" + vnome + "','"+ vendereco + "'," + vcep + "," + vfone + ",'" + vmarca + "','" + vmodelo + "','" + vdefeitos + "','" + vmensagem "')" ;

  // cria o objeto statement para executar
  // o comando do sql
  Statement stm = conexao.createStatement() ;


  // executa o comando do sql
  stm.executeUpdate(sql) ;  



  out.print("<br><br>") ;
  out.print("Dados gravados com sucesso!!!") ;

  out.print("<br>") ;
  out.print("<a href='cadastro.html'>Voltar</a>") ; 

%>


CREATE TABLE cadastro_m1 (
	codigo INT PRIMARY KEY IDENTITY(1,1),
    nome varchar(100),
	endereco VARCHAR(100), 
	cep  varchar(6),
    fone varchar(13),
    marca varchar(200),
	modelo varchar(30),
    defeitos varchar(200),
    mensagem(900),




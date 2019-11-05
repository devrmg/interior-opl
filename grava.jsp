<%@ page language="java"  import="java.sql.*"%>
<%

  // cria as variaveis  
  // e obtem os dados digitados pelo usuario
  String vnome  = request.getParameter( "input" ) ;
  String vendereco = request.getParameter( "input1");
  String vcep = request.getParameter( "number" ) ;
  String vfone = request.getParameter( "number1" ) ;
  String vmarca = request.getParameter( "select");
  String vmodelo = request.getParameter( "input3");
  String vdefeitos = request.getParameter( "checkbox[]");
  String vmensagem = request.getParameter( "textarea");

  
  // mostra na tela as informa
  //
  out.print( "vnome: "  +  vnome + "<br>") ;
  out.print( "vendereco : "  +  vendereco  + "<br>") ;
  out.print( "vcep: "  +  vcep + "<br>") ;
  out.print( "vfone: "  +  vfone + "<br>") ;
  out.print( "vmarca: "  +  vmarca + "<br>") ;
  out.print( "vmodelo: "  +  vmodelo + "<br>") ;
  out.print( "vdefeitos: "  +  vdefeitos + "<br>") ;
  out.print( "vmensagem: "  +  vmensagem + "<br>") ;
  // cria as variaveis para conexao com o banco de dados
 
  String driver = "net.sourceforge.jtds.jdbc.Driver" ;
  String url     = "jdbc:jtds:sqlserver://10.4.0.90:1433/bd201912019" ;
  String usuario = "bd201912019" ;
  String senha   = "123456" ;

  // carrega o driver na memria
 
  Class.forName(driver) ;

  // cria a conexao com o banco
  Connection conexao = DriverManager.getConnection(url,usuario,senha);

  // prepara o comondo para inserir 
  String sql = "INSERT INTO cadastro2 (vnome,vendereco,vcep,vfone,vmarca,vmodelo,vdefeitos,vmensagem) VALUES ('" + vnome + "','"+ vendereco + "','" + vcep + "','" + vfone + "','" + vmarca + "','" + vmodelo + "','" + vdefeitos + "','" + vmensagem + "')" ;

  // cria o objeto statement para executar
  // o comando do sql
  Statement stm = conexao.createStatement() ;


  // executa o comando do sql
  stm.executeUpdate(sql) ;  



  out.print("<br><br>") ;
  out.print("Dados gravados com sucesso!!!") ;

  out.print("<br>") ;
  out.print("<a href='index.html'>Voltar</a>") ; 

%>





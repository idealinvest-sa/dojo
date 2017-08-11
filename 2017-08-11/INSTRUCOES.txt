Problema 1

Você trabalha para um banco, que recentemente comprou uma máquina engenhosa para auxiliar na leitura de cartas e fax enviados por filiais. A máquina verifica os documentos em papel e produz um arquivo com uma série de entradas que se parecem com isto:
   _  _     _  _  _  _  _
 | _| _||_||_ |_   ||_||_|
 ||_  _|  | _||_|  ||_| _|

Cada entrada tem 4 linhas de comprimento e cada linha possui 27 caracteres. As primeiras 3 linhas de cada entrada contêm um número de conta escrito usando pipes e underscores, e a quarta linha está em branco. Cada número de conta deve ter 9 dígitos, todos os quais devem estar entre 0-9. Um arquivo normal contém cerca de 500 entradas.

Sua primeira tarefa é escrever um programa que pode levar esse arquivo e analisá-lo em números de conta reais.

Problema 2

Tendo feito isso, você percebeu rapidamente que a máquina engenhosa não é de fato infalível. Às vezes, dá errado na sua varredura. O próximo passo, portanto, é validar que os números que você lê são de fato números de conta válidos. Um número de conta válido tem uma soma de verificação válida. Isso pode ser calculado da seguinte forma:

account number:  3  4  5  8  8  2  8  6  5
position names:  d9 d8 d7 d6 d5 d4 d3 d2 d1

checksum calculation:
(d1+2*d2+3*d3 +..+9*d9) mod 11 = 0

Então, agora, você também deve escrever algum código que calcula a soma de verificação para um determinado número e identifica se é um número de conta válido.



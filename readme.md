# Classe abstrata
É a classe mãe que é extendida pelas classes filhas, e ela geralmetente não tem objeto gerados para ela.

# Método abstrado
Não poderá ser utilizado pelas classes filhas o método que tiver como abstrato

# Classe final.
As classe filha que tiver "final" no inicio do método, não poderá ter classes filhas a partir dela.

# Método e atributo estático
O atributo estático tem a vantagem de ser utilizado sem precisar criar um objeto para aecssar ele, sendo acessado com a seguinte estrutura: 

NomeClasse::atributoEstático 

já o mé todo estático é criado para ser possivel manipular o atributo estático. Quando for acessar o atributo estático, é necessário referir-se a ele como "self::atributoEstático" ao invés de "$this->atributoEstático";

# associação
Uma classe é criada e outra também, depois é instanciada um objeto para ambas, e uma pode ser atribuida ao atributo da outra, EX:

É criado o objeto POST, e em seguida o objeto categoria. A categoria pode ter vários atributos. Depois basta pegar o objeto da categoria criada e setar no atributo categoria do objeto post.
# Agregação
É quando a classe possuei um atributo que armazena vários valores. Para o valor ser salvo nesse atributo, é criado vários objetos da mesma categoria, e depois eles são armazenados via array no atributo do objeto destinado a eles.

# Composição
É quando uma classe é instanciada dentro da outra, fazendo com que não seja necessário instanciar um segunto objeto para só depois realaciona-los.

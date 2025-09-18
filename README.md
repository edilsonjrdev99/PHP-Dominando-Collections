## Dominando Collections em PHP

### Conceitos

- Entendendo como funciona um array padrão no PHP (hash table)
- Entendendo como usar um vetor no PHP (splFixedArray)
- Entendendo como usar lista duplamente ligada ($splDoublyLinkedList)
- Entendendo consumo de memória em cada tipo de array
- Entendendo como funciona um SplObjectStorage

### Cada capítulo fala sobre

1. Intimidade com arrays
2. Dados em lista
3. Flexibilidade em lista
4. Conjuntos

### Estrutura de dados

- **SplObjectStorage**: é uma estrutura semelhante a uma hash table que armazena objetos como chaves. Funciona tanto
como um conjunto (set) quanto como um map (quando você associa dados a cada objeto).Mantém a ordem de inserção, mas não
usa índices numéricos como arrays — os próprios objetos são as chaves.Possui o método contains(), que permite verificar 
se um objeto já está armazenado.

### Referências

- [spl - estrutura de dados](https://www.php.net/manual/pt_BR/spl.datastructures.php)
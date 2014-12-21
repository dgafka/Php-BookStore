<h3>Sample DDD + CQRS (without event sourcing) application</h3>

<h4>This application was written in clean PHP and in Zephir (<a href="https://github.com/dgafka/zephir-BookStore">Zephir application</a>), to compare times between these two</h4>

<h5>Results are here:</h5>

<table>
  <tr>
    <th>Type</th>
    <th>Iterations</th> 
    <th>Number of try</th>
    <th>Time</th>
  </tr>
  <tr>
    <td>Clean PHP</td>
    <td>10000</td> 
    <td>1</td>
    <td>20.337090015411ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>10000</td> 
    <td>2</td>
    <td>20.29586315155ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>10000</td> 
    <td>3</td>
    <td>20.57569694519ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>10000</td> 
    <td>4</td>
    <td>20.528285980225ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>10000</td> 
    <td>5</td>
    <td>20.322417974472ms</td>
  </tr>
  
  
  <tr>
    <td>Zephir</td>
    <td>10000</td> 
    <td>1</td>
    <td>20.780328035355ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>10000</td> 
    <td>2</td>
    <td>21.186216115952ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>10000</td> 
    <td>3</td>
    <td>20.857846021652ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>10000</td> 
    <td>4</td>
    <td>20.544716835022ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>10000</td> 
    <td>5</td>
    <td>20.764199018478ms</td>
  </tr>
  
  <tr>
    <td>Clean PHP</td>
    <td>10000</td> 
    <td>1</td>
    <td>0.19838714599609ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>10000</td> 
    <td>2</td>
    <td>0.15865206718445ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>10000</td> 
    <td>3</td>
    <td>0.15776801109314ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>10000</td> 
    <td>4</td>
    <td>0.15975594520569ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>10000</td> 
    <td>5</td>
    <td>0.16865801811218ms</td>
  </tr>
  
  <tr>
    <td>Zephir</td>
    <td>1000</td> 
    <td>1</td>
    <td>0.18288612365723ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>1000</td> 
    <td>2</td>
    <td>0.18787503242493ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>1000</td> 
    <td>3</td>
    <td>0.18790102005005ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>1000</td> 
    <td>4</td>
    <td>0.18348097801208ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>1000</td> 
    <td>5</td>
    <td>0.18408203125ms</td>
  </tr>
  
</table>

</table>

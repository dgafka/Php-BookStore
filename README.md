<h3>Sample DDD + CQRS (without event sourcing) application</h3>

<h4>This application was written in clean PHP and in Zephir (<a href="https://github.com/dgafka/zephir-BookStore">Zephir application</a>), to compare times between these two</h4>

<h5>Results are here:</h5>
Test works without opcache.

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
    <td>20.016590ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>10000</td> 
    <td>2</td>
    <td>19.745666ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>10000</td> 
    <td>3</td>
    <td>19.404305ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>10000</td> 
    <td>4</td>
    <td>19.476062ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>10000</td> 
    <td>5</td>
    <td>19.848014ms</td>
  </tr>
  
  
  <tr>
    <td>Zephir</td>
    <td>10000</td> 
    <td>1</td>
    <td>19.662290ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>10000</td> 
    <td>2</td>
    <td>19.670552ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>10000</td> 
    <td>3</td>
    <td>19.377817ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>10000</td> 
    <td>4</td>
    <td>19.108817ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>10000</td> 
    <td>5</td>
    <td>19.386876ms</td>
  </tr>
  
  <tr>
    <td>Clean PHP</td>
    <td>1000</td> 
    <td>1</td>
    <td>0.156562ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>1000</td> 
    <td>2</td>
    <td>0.157638ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>1000</td> 
    <td>3</td>
    <td>0.156771ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>1000</td> 
    <td>4</td>
    <td>0.155907ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>1000</td> 
    <td>5</td>
    <td>0.165265ms</td>
  </tr>
  
  <tr>
    <td>Zephir</td>
    <td>1000</td> 
    <td>1</td>
    <td>0.162988ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>1000</td> 
    <td>2</td>
    <td>0.164650ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>1000</td> 
    <td>3</td>
    <td>0.163487ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>1000</td> 
    <td>4</td>
    <td>0.164317ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>1000</td> 
    <td>5</td>
    <td>0.165328ms</td>
  </tr>
  
  
  <tr>
    <td>Clean PHP</td>
    <td>100</td> 
    <td>1</td>
    <td>0.005081ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>100</td> 
    <td>2</td>
    <td>0.004434ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>100</td> 
    <td>3</td>
    <td>0.005733ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>100</td> 
    <td>4</td>
    <td>0.005672ms</td>
  </tr>
    <tr>
    <td>Clean PHP</td>
    <td>100</td> 
    <td>5</td>
    <td>0.005393ms</td>
  </tr>
  
  <tr>
    <td>Zephir</td>
    <td>100</td> 
    <td>1</td>
    <td>0.005609ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>100</td> 
    <td>2</td>
    <td>0.011907ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>100</td> 
    <td>3</td>
    <td>0.005806ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>100</td> 
    <td>4</td>
    <td>0.005071ms</td>
  </tr>
    <tr>
    <td>Zephir</td>
    <td>100</td> 
    <td>5</td>
    <td>0.011168ms</td>
  </tr>
  
</table>

</table>

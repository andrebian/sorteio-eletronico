<?php
/**
 * Description of GeraNumero
 *
 * @author andrebian
 */
class GeraNumero
{
    protected $numeros;
    protected $min;
    protected $max;

    public function __construct()
    {
        if ( isset($_POST) ) {
            if ( !empty($_POST['s']) ) {
                $numeros = explode(' - ', $_POST['s']);
                
                $this->numeros = $numeros;
            }
            
            if ( !empty($_POST['min']) && !empty($_POST['max']) ) {
                $this->min = (int) $_POST['min'];
                $this->max = (int) $_POST['max'];
            }
            
            echo $this->__gerarNumero();
        }
    }
    
    /**
     * Gera o número único
     * 
     * @return string
     */
    private function __gerarNumero()
    {
        $numero = mt_rand($this->min, $this->max);
        if ( !empty($this->numeros) && count($this->numeros) < $this->max ) {
            while(in_array($numero, $this->numeros)) {
                $numero = mt_rand($this->min, $this->max);
            }
        } else {
            if ( count($this->numeros) >= $this->max ) {
                $numero = '---';
            }
        }
        
        return $numero;
        
    }
    
}

new GeraNumero();

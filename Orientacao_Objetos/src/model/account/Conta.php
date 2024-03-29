<?php
namespace aplication\model\account;
abstract class Conta //
{
    #region Atributos 
    private Titular $titular;
    protected $saldo;
    private static float $numeroDeContas = 0;
    #endregion

    public function __construct(Titular $titular) //Instanciando construtor
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct() //Instanciando destrutor
    {
        self::$numeroDeContas--;
    }

    abstract protected function percentualDeTarifa():float; // Método abstrato (incompleto)...

    public function saca(float $valorASacar): void
    {
        $valorTarifa = $valorASacar * $this->percentualDeTarifa();
        $valorSaque = $valorASacar + $valorTarifa;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
<?php
namespace CalculatorBundle\Entity;

class Calculator
{

    /**
     * @var float
     */
    private $leftOperand;

    /**
     * @var float
     */
    private $rightOperand;

    /**
     * @var string
     */
    private $operator;

    /**
     * Get right operand
     *
     * @return float
     */
    /**
     * @return float
     */
    public function getRightOperand()
    {
        return $this->rightOperand;
    }

    /**
     * set right operand
     *
     * @param float
     *
     * @return Calculator
     */

    public function setRightOperand($operand)
    {
        $this->rightOperand = $operand;

        return $this;
    }

    /**
     * get operator
     *
     * @return float
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     *set operator
     *
     * @param string
     *
     * @return Calculator
     */

    public function setOperator($operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * Get left operand
     *
     * @return float
     */
    /**
     * @return float
     */
    public function getLeftOperand()
    {
        return $this->leftOperand;
    }

    /**
     * set left operand
     *
     * @param float
     *
     * @return Calculator
     */

    public function setLeftOperand($operand)
    {
        $this->leftOperand = $operand;

        return $this;
    }
}


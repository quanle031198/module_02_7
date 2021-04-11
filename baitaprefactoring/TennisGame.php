<?php
const ZERO = 0;
const ONE = 1;
const TWO = 2;
const THREE = 3;

class TennisGame
{
    public $score = '';

    public function getScore($namePlayer1, $namePlayer2, $m_score1, $m_score2)
    {
        $startScore = 0;

        if ($m_score1 == $m_score2) {
            switch ($m_score1) {
                case ZERO:
                    $this->score = "Love-All";
                    break;
                case ONE:
                    $this->score = "Fifteen-All";
                    break;
                case TWO:
                    $this->score = "Thirty-All";
                    break;
                case THREE:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;
            }
        } else if ($m_score1 >= 4 || $m_score2 >= 4) {
            $minusResult = $m_score1 - $m_score2;
            if ($minusResult == 1) $this->score = "Advantage player1";
            else if ($minusResult == -1) $this->score = "Advantage player2";
            else if ($minusResult >= 2) $this->score = "Win for player1";
            else $this->score = "Win for player2";
        } else {
            for ($i = 1; $i < 3; $i++) {
                if ($i == 1) $startScore = $m_score1;
                else {
                    $this->score .= "-";
                    $startScore = $m_score2;
                }
                switch ($startScore) {
                    case ZERO:
                        $this->score .= "Love";
                        break;
                    case ONE:
                        $this->score .= "Fifteen";
                        break;
                    case TWO:
                        $this->score .= "Thirty";
                        break;
                    case THREE:
                        $this->score .= "Forty";
                        break;
                }
            }
        }
    }

    public function __toString()
    {
        return $this->score;
    }
}

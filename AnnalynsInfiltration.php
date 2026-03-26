 <?php

// https://exercism.org/tracks/php/exercises/annalyns-infiltration/edit


class AnnalynsInfiltration
{
    public function canFastAttack($is_knight_awake)
    {
            return !$is_knight_awake;
    }
    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        if ($is_knight_awake || $is_archer_awake || $is_prisoner_awake) {
            return true;
        }
        return false;
    }

public function canSignal($is_archer_awake, $is_prisoner_awake)
{
    return !$is_archer_awake && $is_prisoner_awake;
}

public function canLiberate(
    $is_knight_awake,
    $is_archer_awake,
    $is_prisoner_awake,
    $is_dog_present
) {
    if ($is_dog_present) {
        // С собакой: нужно только чтобы арбалетчик спал
        return !$is_archer_awake;
    } else {
        // Без собаки: пленник должен быть awake, рыцарь и арбалетчик должны спать
        return $is_prisoner_awake && !$is_knight_awake && !$is_archer_awake;
    }
}
}

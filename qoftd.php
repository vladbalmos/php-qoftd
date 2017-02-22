<?php

class CliColor
{
    public static $colors = array(
        'reset' => "\e[0m",
        // regular
        'regularRed' => "\e[0;31m",
        'regularGreen' => "\e[0;32m",
        'regularYellow' => "\e[0;33m",
        // bold
        'boldRed' => "\e[1;31m",
        'boldGreen' => "\e[1;32m",
        'boldWhite' => "\e[1;37m",
        'boldYellow' => "\e[1;33m"
    );
    public static function __callStatic($name, $arguments)
    {
        $color = static::$colors[$name];
        if (posix_isatty(STDOUT)) {
            return $color . $arguments[0] . static::$colors['reset'];
        }
        return $arguments[0];
    }
}

$positiveMessages = [
    // Mine
    "Anger prevents seeing the situation objectively",
    "Don't believe everything you think!",

    // 13 things strong minded people don't do
    "Don't give up after the first failure!",
    "Don't fear alone time!",
    "The world doesn't owe you anything!",
    "Don't expect immediate results!",
    "Don't feel sorry for yourself!",
    "Don't give away your power!",
    "Don't shy away from change!",
    "Don't focus on things you can't control!",
    "Don't please everyone!",
    "Don't fear taking calculated risks!",
    "Don't dwell on the past!",
    "Don't repeat the same mistake",
    "Don't resent other people's success!",

    // Feel the fear and do it anyway
    "Feel the fear and do it anyway!",

    // How to win friends and influence people
    "Don't criticise, condemn or complain!",
    "The greatest asset I possess, and the way to develop the best that is in a person is by appreciation and encouragement",
    "Give honest and sincere appreciation.",
    "Arouse in the other person an eager want!",
    "Become genuinely interested in other people",
    "Smile!",
    "Remember that a person's name is to that person the sweetes and most important sound in any language.",
    "Be a good listener. Encourage others to talk about themselves.",
    "Talk in terms of the other person's interests.",
    "Make the other person feel important - and do it sincerely.",
    "The only way to get the best of an argument is to avoid it.",
    "Show respect for the other person's opinions. Never say \"You're wrong.\"!",
    "If you are wrong, admit it quickly and emphatically.",
    "Begin in a friendly way!",
    "Get the other person saying \"yes,yes\" immediately.",
    "Let the other person do a great deal of the talking.",
    "Let the other person feel that the ideea is his or hers.",
    "Try honestly to see things from the other person's point of view.",
    "Be sympathetic with the other person's ideas and desires.",
    "Appeal to the nobler motives.",
    "Dramatize your ideeas.",
    "Throw down a challenge.",
    "Begin with praise and honest appreciation.",
    "Call attention to people's mistakes indirectly.",
    "Talk about your own mistakes before criticizing the other person.",
    "Ask questions instead of giving direct orders.",
    "Let the other person save face.",
    "Praise the slightest improvement and praise every improvement. Be \"hearty in your approbation and lavish in your praise.\"",
    "Give the other person a fine reputation to live up to.",
    "Use encouragement. Make the fault seem easy to correct.",
    "Make the other person happy about doing the thing you suggest.",

    // Other
    "Never take counsel of your fears!"
];

$index = mt_rand(0, count($positiveMessages) - 1);
$msg = $positiveMessages[$index];

echo CliColor::boldWhite($msg) . PHP_EOL;

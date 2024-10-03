<?php

// Step 1: Define the main interface (Component).
interface Message {
    public function getContent(): string;
}

// Step 2: Concrete component (Basic Message).
class BasicMessage implements Message {
    private string $content;

    public function __construct(string $content) {
        $this->content = $content;
    }

    public function getContent(): string {
        return $this->content;
    }
}

// Step 3: Decorator class (abstract class implementing the Message interface).
abstract class MessageDecorator implements Message {
    protected Message $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function getContent(): string {
        return $this->message->getContent();
    }
}

// Step 4: Concrete Decorators (Add-ons).
class BoldDecorator extends MessageDecorator {
    public function getContent(): string
    {
        return "<b>" . $this->message->getContent() . "</b>";
    }
}

class ItalicDecorator extends MessageDecorator {
    public function getContent(): string {
        return "<i>" . $this->message->getContent() . "</i>";
    }
}

// Step 5: Client code.
function clientCode() {
    // Create a basic message.
    $message = new BasicMessage("Hello, World!");

    // Decorate it with bold styling.
    $boldMessage = new BoldDecorator($message);
    echo "Bold Message: " . $boldMessage->getContent() . "\n";

    // Decorate it further with italic styling.
    $italicBoldMessage = new ItalicDecorator($boldMessage);
    echo "Italic and Bold Message: " . $italicBoldMessage->getContent() . "\n";
}
clientCode();

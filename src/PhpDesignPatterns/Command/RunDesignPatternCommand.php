<?php
declare(strict_types=1);

namespace PhpDesignPatterns\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class RunDesignPatternCommand
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class RunDesignPatternCommand extends Command
{

    /**
     * @inheritdoc
     *
     * @throws \Symfony\Component\Console\Exception\InvalidArgumentException
     */
    protected function configure(): void
    {
        $this
            ->setName('run:design-pattern')
            ->setDescription('Runs a design pattern.')
            ->setHelp('This command allows you to run a design pattern...');
    }

    /**
     * @inheritdoc
     */
    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        // @todo Implement functionality to run a desired design pattern for demonstration purposes.
    }

}

<?php

namespace Iban\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class IbanGenerationCommand extends Command
{
	protected function configure()
	{
		$this->setName('iban:generate')
			->setDescription('generate ibans')
			->addArgument('input_file', InputArgument::REQUIRED, 'Enter an input file'	)
			->addArgument('output_file', InputArgument::REQUIRED, 'Enter an input file');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$input_file = $input->getArgument('input_file');
		$output_file = $input->getArgument('output_file');
		
		
		// progress
		
		
		$output->writeln($input_file);
		$output->writeln($output_file);
	}
}
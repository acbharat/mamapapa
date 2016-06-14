<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */

class Robofile extends \Robo\Tasks
{
//    use \Codeception\Task\MergeReports;
//    use \Codeception\Task\SplitTestsByGroups;

    public function parallelRunFirefox()
    {
        $parallel = $this->taskParallelExec();

        $cests = ["ApiCest","LoginFacebookCest","ProductDetailsCest","SearchResultsCest"];

        foreach($cests as $cest)
        {
            $parallel->process(
                $this->taskCodecept()
                    ->suite("acceptance $cest") // run acceptance tests
                    ->env("Firefox")
                    ->xml("tests/_log/result_$cest.xml") // save XML results
                    ->html("tests/_output/$cest.html")
            );
        }

        return $parallel->run();
    }

    public function parallelRunChrome()
    {
        $parallel = $this->taskParallelExec();

        $cests = ["ApiCest","LoginFacebookCest","ProductDetailsCest","SearchResultsCest"];

        foreach($cests as $cest)
        {
            $parallel->process(
                $this->taskCodecept()
                    ->suite("acceptance $cest") // run acceptance tests
                    ->env("Chrome")
                    ->xml("tests/_log/result_$cest.xml") // save XML results
                    ->html("tests/_output/$cest.html")
            );
        }

        return $parallel->run();
    }

    public function parallelMergeResults()
    {
        $merge = $this->taskMergeXmlReports();
        for ($i=1; $i<=5; $i++) {
            $merge->from("/tests/_log/result_$i.xml");
        }
        $merge->into("/tests/_log/result.xml")
            ->run();
    }
}

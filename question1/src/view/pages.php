
<?php
require_once 'src/controller/api/datim.php';
class Pager{
    public $api_response;
    public $page=1;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->api_response=DatimRequest::request($this->page);
    }

    /**
     * @return void
     */
    public function render()
    {
        $value = (object)$this->api_response;
        $items=$value->listGrid->rows;
        // Open the table
        echo "<table class='table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Column 1</th>";
        echo "<th>Column 2</th>";
        echo "<th>Column 3</th>";
        echo "<th>Column 4</th>";
        echo "<th>Column 5</th>";
        echo "<th>Column 6</th>";
        echo "<th>Column 7</th>";
        echo "<th>Column 8</th>";
        echo "</tr>";
        echo "</thead>";

        // Cycle through the array
        foreach ($items as $item) {
            // Output a row
            echo "<tbody>";
            echo "<tr>";
            echo "<td>$item[0]</td>";
            echo "<td>$item[1]</td>";
            echo "<td>$item[2]</td>";
            echo "<td>$item[3]</td>";
            echo "<td>$item[4]</td>";
            echo "<td>$item[5]</td>";
            echo "<td>$item[6]</td>";
            echo "<td>$item[7]</td>";
            echo "<td>$item[8]</td>";
            echo "</tr>";
            echo "</tbody>";
        }

        // Close the table
        echo "</table>";
    }
}

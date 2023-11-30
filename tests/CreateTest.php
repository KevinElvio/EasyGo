<?php
require_once'.\uas\models\Create.php';
require_once'.\uas\core\Database.php';
require_once'.\uas\config\Config.php';


use PHPUnit\Framework\TestCase;

class CREATETest extends TestCase
{
    // Mock database connection
    private $dbMock;
    

    // Instance of CREATE class for testing
    private $create;

    protected function setUp(): void
    {
        // Create a mock database object
        $this->dbMock = $this->getMockBuilder(Database::class)
            ->disableOriginalConstructor()
            ->getMock();

        // Inject the mock database into the CREATE class
        $this->create = new CREATE();
        $this->create->setDatabase($this->dbMock);
    }

    public function testRegisterUser()
    {
        $data = [
            'nama_lengkap' => 'John Doe',
            'username' => 'john_doe',
            'email_user' => 'john@example.com',
            'password' => 'secret',
        ];
    
        // Set up expectations for the mock database
        $this->dbMock->expects($this->once())
            ->method('query')
            ->with($this->stringContains('insert into tbl_user'));
    
        $this->dbMock->expects($this->exactly(4))
            ->method('bind');
    
        $this->dbMock->expects($this->once())
            ->method('execute')
            ->willReturn(true);
    
        // Set up expectations for the mock database result
        $this->dbMock->expects($this->once())
            ->method('rowCount')
            ->willReturn(1); // Set the expected return value
    
        // Call the method to be tested
        $result = $this->create->RegisterUser($data);
    
        // Assert the result
        $this->assertEquals(1, $result);
    }

    public function testRegisterAdmin()
{
    $data = [
        'nama_rental' => 'Rental Company',
        'username' => 'rental_admin',
        'email_user' => 'admin@rental.com',
        'no_telp' => '123456789',
        'password' => 'admin_pass',
        'link_maps' => 'map_link',
        'provinsi' => '1',
        'kota' => '2',
    ];

    // Set up expectations for the mock database
    $this->dbMock->expects($this->once())
        ->method('query')
        ->with($this->stringContains('insert into tbl_rental'));

    $this->dbMock->expects($this->exactly(8))
        ->method('bind');

    $this->dbMock->expects($this->once())
        ->method('execute')
        ->willReturn(true);

    // Set up expectations for the mock database result
    $this->dbMock->expects($this->once())
        ->method('rowCount')
        ->willReturn(1); // Set the expected return value

    // Call the method to be tested
    $result = $this->create->RegisterAdmin($data);

    // Assert the result
    $this->assertEquals(1, $result, 'RegisterUser should return 1 for success');

}

}

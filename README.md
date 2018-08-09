Example route: http://fullcontact.test/fuqu/banks/1/display/bank-accounts/5/edit


```
class BankAccountController extends Controller{

	public $parent_child_relationships = [
		[ 'parent' => 'bank', 'child' => 'bank_account', 'relationship' => 'BankAccounts']
	];

	public function __construct(){
		$this->middleware('orm')
		     ->only(['edit', 'update', 'destroy']);
	}

	//...
}

```
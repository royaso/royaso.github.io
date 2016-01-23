public class duck{
	flyBehavior myfly;
	public static void main(String[] args){
		System.out.println("duck.....");
	}
	public void setfly(flyBehavior aa){
		myfly=aa;
	}
	public void performFly(){
		myfly.Ifly();
	}
}

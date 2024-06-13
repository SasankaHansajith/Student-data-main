import com.oracle.xmlns.internal.webservices.jaxws_databinding.SoapBindingParameterStyle;

public abstract class ElectronicDevice {

    public String DeviceType ;
   
    public long SerialNumber;



    public ElectronicDevice( String DeviceType, long SerialNumber) {

        this.DeviceType = DeviceType;
        this.SerialNumber = SerialNumber;
    }

    
  public class fields {

    public String model ;
    public String manufacture ;

    public fields (String model, String manufacture) {
        this.model = model;
        this.manufacture = manufacture ;
    }



   /*  if som pvate class must use that below one' 
     
    public String getModel() {
        return privateatribute;
    }

    */

  public String getDeviceDetails() {
    

    return "DeviceType" + DeviceType + "SerialNumber" + SerialNumber + 
    "model" + model + "manufacture" +  manufacture ;

  }}}


                         

  
// part B

public class Smartphone extends ElectronicDevice {

  public double screenZise ;


  public Smartphone ( String deviceType, long SerialNumber, 
  String model, String manufature ) {

    super(deviceType, SerialNumber);
    this.screenZise = screenZise;
    this.fields = new fields(model, manufature);


  }
  @Override
  public String getDeviceDetails() {

    return super.getDeviceDetails + ",Screen Size:" + ScreenZize;
  }

}

  //part C

  public class DeviceApp {

    public static void main(String[] args) {

      Smartphone myphone = new myphone ( "smartphone", 123456789, "Glaxy s1",    
                                          "samsung"  ,   6.2      );

      System.out.println( myPhone.getDeviceDetails());                                   




    }
  }
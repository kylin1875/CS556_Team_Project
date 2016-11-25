//
//  ChildProfileViewController.swift
//  Project
//
//  Created by Zhiwei Zheng on 11/13/16.
//  Copyright © 2016 Zhiwei Zheng 10635. All rights reserved.
//
import UIKit

class ChildProfileViewController: UIViewController,UIPickerViewDataSource,UIPickerViewDelegate,UITextFieldDelegate {

    //save
    @IBOutlet var first_name: UITextField!
    @IBOutlet var last_name: UITextField!
    @IBOutlet var chinese_name: UITextField!
    @IBOutlet var birthday: UITextField!
    @IBOutlet var nick_name: UITextField!
    @IBOutlet var primary_language: UITextField!
    @IBOutlet var address: UITextField!
    @IBOutlet var phone: UITextField!
    @IBOutlet var enrollment_date: UITextField!
    @IBOutlet var withdraw_date: UITextField!
    @IBOutlet var start_date: UITextField!//=UITextField()
    @IBOutlet var withdraw_reason: UITextField!
    
    
    @IBOutlet var age: UITextField!=UITextField()
    @IBOutlet var sex: UITextField!=UITextField()
    @IBOutlet var child_status:UITextField!=UITextField()
    
    @IBOutlet var pickerView1: UIPickerView!=UIPickerView()
    @IBOutlet var pickerView2: UIPickerView!=UIPickerView()
    @IBOutlet var pickerView3: UIPickerView!=UIPickerView()
    //@IBOutlet var datepicker1: UIDatePicker!=UIDatePicker()
    
    var gender = ["Male","Female", "else"]
    var ages = ["0", "1", "2","3","4","5"]
    var status = ["Waiting list","Current","Pass","TBD"]

    @IBOutlet weak var saveButton: UIButton!
    @IBOutlet weak var loadButton: UIButton!
    @IBOutlet weak var clearButton: UIButton!

    //button
    @IBAction func clear(_ sender: AnyObject) {
        first_name.text=""
        last_name.text=""
        chinese_name.text=""
        birthday.text=""
        nick_name.text=""
        sex.text=""
        primary_language.text=""
        age.text=""
        address.text=""
        phone.text=""
        enrollment_date.text=""
        withdraw_date.text=""
        start_date.text=""
        withdraw_date.text=""
        child_status.text=""
        /* remove all information from plist
         self.save(self.first_name)
         self.save(self.last_name)
         self.save(self.chinese_name)
         self.save(self.birthday)
         self.save(self.nick_name)
         self.save(self.sex)
         self.save(self.primary_language)
         self.save(self.age)
         self.save(self.address)
         self.save(self.phone)
         self.save(self.enrollment_date)
         self.save(self.withdraw_date)
         self.save(self.start_date)
         self.save(self.withdraw_date)
         self.save(self.child_status)
         */
        /*
        let paths = NSSearchPathForDirectoriesInDomains(.documentDirectory, .userDomainMask, true) as NSArray
        let documentsDirectory = paths.object(at:0) as! NSString
        let path = documentsDirectory.appendingPathComponent("MyData.plist")
        
        let fileManager = FileManager.default
        
        //check if file exists
        if(!fileManager.fileExists(atPath: path)) {
            // If it doesn't, copy it from the default file in the Bundle
            if let bundlePath = Bundle.main.path(forResource: "MyData", ofType: "plist") {
                
                let resultDictionary = NSMutableDictionary(contentsOfFile: bundlePath)
                print("Bundle MyData.plist file is --> \(resultDictionary?.description)")
                
                //fileManager.copyItem(atPath: bundlePath, toPath: path)
                
                
                print("copy")
            } else {
                print("MyData.plist not found. Please, make sure it is part of the bundle.")
            }
        } else {
            print("MyData.plist already exits at path.")
            // use this to delete file from documents directory
            fileManager.removeItem(atPath: path)
        }
 */
        
    }
    
    
    //button to save info into plist
    @IBAction func save(_ sender: AnyObject) {
        let paths = NSSearchPathForDirectoriesInDomains(.documentDirectory, .userDomainMask, true) as NSArray
        let documentsDirectory = paths.object(at: 0) as! NSString
        let path = documentsDirectory.appendingPathComponent("MyData.plist")
        
        let dict: NSMutableDictionary = ["XInitializerItem": "DoNotEverChangeMe"]
        //saving values
        dict.setObject(first_name.text!, forKey: "first_name" as NSCopying)
        dict.setObject(last_name.text!, forKey: "last_name" as NSCopying)
        dict.setObject(chinese_name.text!, forKey: "chinese_name" as NSCopying)
        dict.setObject(birthday.text!, forKey: "birthday" as NSCopying)
        dict.setObject(nick_name.text!, forKey: "nick_name" as NSCopying)
        dict.setObject(sex.text!, forKey: "sex" as NSCopying)
        dict.setObject(primary_language.text!, forKey: "primary_language" as NSCopying)
        dict.setObject(age.text!, forKey: "age" as NSCopying)
        dict.setObject(address.text!, forKey: "address" as NSCopying)
        dict.setObject(phone.text!, forKey: "phone" as NSCopying)
        dict.setObject(enrollment_date.text!, forKey: "enrollment_date" as NSCopying)
        dict.setObject(withdraw_date.text!, forKey: "withdraw_date" as NSCopying)
        dict.setObject(start_date.text!, forKey: "start_date" as NSCopying)
        dict.setObject(withdraw_reason.text!, forKey: "withdraw_reason" as NSCopying)
        dict.setObject(child_status.text!, forKey: "child_status" as NSCopying)
        //...
        
        //writing to MyData.plist
        dict.write(toFile: path, atomically: false)
        
        let resultDictionary = NSMutableDictionary(contentsOfFile: path)
        print("Saved MyData.plist file is --> \(resultDictionary?.description)")
    }
    
    //button to read info from plist
    @IBAction func load(_ sender: AnyObject) {
        // getting path to MyData.plist
        let paths = NSSearchPathForDirectoriesInDomains(.documentDirectory, .userDomainMask, true) as NSArray
        let documentsDirectory = paths.object(at:0) as! NSString
        let path = documentsDirectory.appendingPathComponent("MyData.plist")
        
        let fileManager = FileManager.default
        
        //check if file exists
        if(!fileManager.fileExists(atPath: path)) {
            // If it doesn't, copy it from the default file in the Bundle
            if let bundlePath = Bundle.main.path(forResource: "MyData", ofType: "plist") {
                
                let resultDictionary = NSMutableDictionary(contentsOfFile: bundlePath)
                print("Bundle MyData.plist file is --> \(resultDictionary?.description)")
                
                //fileManager.copyItem(atPath: bundlePath, toPath: path)
                
                
                print("copy")
            } else {
                print("MyData.plist not found. Please, make sure it is part of the bundle.")
            }
        } else {
            print("MyData.plist already exits at path.")
            // use this to delete file from documents directory
            //fileManager.removeItemAtPath(path, error: nil)
        }
        
        let resultDictionary = NSMutableDictionary(contentsOfFile: path)
        print("Loaded MyData.plist file is --> \(resultDictionary?.description)")
        
        let myDict = NSDictionary(contentsOfFile: path)
        
        if let dict = myDict {
            //loading values
            first_name.text = (dict.object(forKey: "first_name")! as AnyObject) as? String
            last_name.text = (dict.object(forKey: "last_name")! as AnyObject) as? String
            chinese_name.text = (dict.object(forKey: "chinese_name")! as AnyObject) as? String
            birthday.text = (dict.object(forKey: "birthday")! as AnyObject) as? String
            nick_name.text = (dict.object(forKey: "nick_name")! as AnyObject) as? String
            sex.text = (dict.object(forKey: "sex")! as AnyObject) as? String
            primary_language.text = (dict.object(forKey: "primary_language")! as AnyObject) as? String
            age.text = (dict.object(forKey: "age")! as AnyObject) as? String
            address.text = (dict.object(forKey: "address")! as AnyObject) as? String
            phone.text = (dict.object(forKey: "phone")! as AnyObject) as? String
            enrollment_date.text = (dict.object(forKey: "enrollment_date")! as AnyObject) as? String
            withdraw_date.text = (dict.object(forKey: "withdraw_date")! as AnyObject) as? String
            start_date.text = (dict.object(forKey: "start_date")! as AnyObject) as? String
            withdraw_reason.text = (dict.object(forKey: "withdraw_reason")! as AnyObject) as? String
            child_status.text = (dict.object(forKey: "child_status")! as AnyObject) as? String
            //...
        } else {
            print("WARNING: Couldn't create dictionary from MyData.plist! Default values will be used!")
        }
    }
    
    override func viewDidLoad() {
        super.viewDidLoad() //show selected view to the screen
        self.showAnimate()
        
        pickerView1.delegate = self
        pickerView2.delegate = self
        pickerView3.delegate = self
        
        pickerView1.tag = 0
        pickerView2.tag = 1
        pickerView3.tag = 2
        
        self.sex.inputView = self.pickerView1;
        self.age.inputView = self.pickerView2;
        self.child_status.inputView = self.pickerView3;
        // Do any additional setup after loading the view.
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    @IBAction func textFieldDoneEditing(_ sender:UITextField){
        sender.resignFirstResponder()
    }
    
    @IBAction func backgroundTap(_ sender: UIControl){
        first_name.resignFirstResponder()
        last_name.resignFirstResponder()
        chinese_name.resignFirstResponder()
        birthday.resignFirstResponder()
        nick_name.resignFirstResponder()
        sex.resignFirstResponder()
        primary_language.resignFirstResponder()
        age.resignFirstResponder()
        address.resignFirstResponder()
        phone.resignFirstResponder()
        enrollment_date.resignFirstResponder()
        withdraw_date.resignFirstResponder()
        start_date.resignFirstResponder()
        withdraw_reason.resignFirstResponder()
        child_status.resignFirstResponder()
    }
    
    //remove the view from screen
    @IBAction func ClosePopUp(_ sender: AnyObject) {
        self.removeAnimate()
        //self.view.removeFromSuperview()
    }
    
    //Animation
    func showAnimate(){
        //Make the view bigger first
        self.view.transform = CGAffineTransform(scaleX: 1.3, y: 1.3);
        //Transparency
        self.view.alpha = 0.0;
        //animate the view, scale down to normal in 0.25S
        UIView.animate(withDuration: 0.25, animations: {
            self.view.alpha=1.0
            self.view.transform = CGAffineTransform(scaleX: 1, y: 1);
        })
    }
    
    func removeAnimate(){
        //animate the view from smaller to bigger(1 to 1.3) as exitting the screen
        UIView.animate(withDuration: 0.25, animations: {
            self.view.transform = CGAffineTransform(scaleX: 1.3, y: 1.3);
            self.view.alpha=0.0
            },completion:{(finished:Bool) in
                if(finished)
                {
                    //once Animation finish, remove it.
                    self.view.removeFromSuperview()
                }
        })
    }
    
    /*
     This part for picker view
     */
    // returns the number of 'columns' to display.
    public func numberOfComponents(in pickerView: UIPickerView) -> Int{
        return 1
    }
    
    // returns the # of rows in each component..
    public func pickerView(_ pickerView: UIPickerView, numberOfRowsInComponent component: Int) -> Int{
        if pickerView.tag == 0 {
            return gender.count
        } else if pickerView.tag == 1 {
            return ages.count
        } else {
            return  status.count
        }
        
    }
    
    func pickerView(_ pickerView: UIPickerView, didSelectRow row: Int, inComponent component: Int) {
        if pickerView.tag == 0 {
            sex.text = gender[row]
        } else if pickerView.tag == 1 {
            age.text = ages[row]
        } else {
            child_status.text = status[row]
        }
    }
    
    func pickerView(_ pickerView: UIPickerView, titleForRow row: Int, forComponent component: Int) -> String? {
        if pickerView.tag == 0 {
            return gender[row]
        } else if pickerView.tag == 1 {
            return ages[row]
        } else {
            return status[row]
        }
    }
    
    /*
 date picker

    @IBOutlet var datePicker:UIDatePicker
    dateTextField.inputView = datePicker
     
     self.edgesForExtendedLayout = UIRectEdge.None//in did load
     dateTextField.inputView = datePicker//in did load
     
     @IBAction func dateValueChanged(sender:UIDatePicker)
     {
     dateTextField.text = sender.date.description
     }
    */
    
    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }
    */

}

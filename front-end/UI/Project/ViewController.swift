//
//  ViewController.swift
//  Project
//
//  Created by Zhiwei Zheng on 11/12/16.
//  Copyright © 2016 Zhiwei Zheng 10635. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    @IBAction func ShowChildProfile(_ sender: AnyObject) {
        let popOverVC = UIStoryboard(name:"Main",bundle:
            nil).instantiateViewController(withIdentifier: "ChildProfile") as! ChildProfileViewController
        self.addChildViewController(popOverVC)
        popOverVC.view.frame=self.view.frame
        self.view.addSubview(popOverVC.view)
        popOverVC.didMove(toParentViewController: self)
    }
    @IBAction func ShowSignIn(_ sender: AnyObject) {
        let popOverVC = UIStoryboard(name:"Main",bundle:
            nil).instantiateViewController(withIdentifier: "SignIn") as! SignInViewController
        self.addChildViewController(popOverVC)
        popOverVC.view.frame=self.view.frame
        self.view.addSubview(popOverVC.view)
        popOverVC.didMove(toParentViewController: self)
    }
    @IBAction func ShowDailyRecord(_ sender: AnyObject) {
        let popOverVC = UIStoryboard(name:"Main",bundle:
            nil).instantiateViewController(withIdentifier: "DailyRecord") as! DailyRecordViewController
        self.addChildViewController(popOverVC)
        popOverVC.view.frame=self.view.frame
        self.view.addSubview(popOverVC.view)
        popOverVC.didMove(toParentViewController: self)
    }
    @IBAction func ShowMedicalCare(_ sender: AnyObject) {
        let popOverVC = UIStoryboard(name:"Main",bundle:
            nil).instantiateViewController(withIdentifier: "MedicalCare") as! MedicalCareViewController
        self.addChildViewController(popOverVC)
        popOverVC.view.frame=self.view.frame
        self.view.addSubview(popOverVC.view)
        popOverVC.didMove(toParentViewController: self)
    }
    @IBAction func ShowMedicalHistory(_ sender: AnyObject) {
        let popOverVC = UIStoryboard(name:"Main",bundle:
            nil).instantiateViewController(withIdentifier: "MedicalHistory") as! MedicalHistoryViewController
        self.addChildViewController(popOverVC)
        popOverVC.view.frame=self.view.frame
        self.view.addSubview(popOverVC.view)
        popOverVC.didMove(toParentViewController: self)
    }
    @IBAction func ShowEmergencyContact(_ sender: AnyObject) {
        let popOverVC = UIStoryboard(name:"Main",bundle:
            nil).instantiateViewController(withIdentifier: "EmergencyContact") as! EmergencyContactViewController
        self.addChildViewController(popOverVC)
        popOverVC.view.frame=self.view.frame
        self.view.addSubview(popOverVC.view)
        popOverVC.didMove(toParentViewController: self)
    }
    @IBAction func ShowPrimaryContact(_ sender: AnyObject) {
        let popOverVC = UIStoryboard(name:"Main",bundle:
            nil).instantiateViewController(withIdentifier: "PrimaryContact") as! PrimaryContactViewController
        self.addChildViewController(popOverVC)
        popOverVC.view.frame=self.view.frame
        self.view.addSubview(popOverVC.view)
        popOverVC.didMove(toParentViewController: self)
    }

}


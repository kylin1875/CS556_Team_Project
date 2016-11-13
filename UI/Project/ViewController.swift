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
    
    @IBAction func ShowPopUp(_ sender: AnyObject) {
        let popOverVC = UIStoryboard(name:"Main",bundle:
            nil).instantiateViewController(withIdentifier: "sbPopUpID") as! PopUpViewController
        self.addChildViewController(popOverVC)
        popOverVC.view.frame=self.view.frame
        self.view.addSubview(popOverVC.view)
        popOverVC.didMove(toParentViewController: self)
    }

}


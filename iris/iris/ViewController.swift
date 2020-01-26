//
//  ViewController.swift
//  iris
//
//  Created by Allie Cui on 2020-01-25.
//  Copyright © 2020 Allie Cui. All rights reserved.
//

import UIKit

class ViewController: UIViewController {
    
    var number = 0
    @IBOutlet weak var labelOne: UILabel!
    
    @IBAction func addButton(_ sender: Any) {
        number += 1
        labelOne.text = String(number)
    }
    
    @IBAction func subButton(_ sender: Any) {
        number -= 1
        labelOne.text = String(number)
    }
    override func viewDidLoad() {
        super.viewDidLoad()
        labelOne.text = String(number)
        // Do any additional setup after loading the view.
    }


}

